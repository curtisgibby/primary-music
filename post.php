<?php

function renderSong($input) {
	$query = $title = $input;
	$collection = 'music-for-children';

	preg_match('/^\[(\w+) ([0-9]+(–[0-9]+)?)\] /', $input, $matches);

	if(!empty($matches)) {
		$query = $matches[2];
		switch ($matches[1]) {
			case 'Hymns':
				$collection = 'hymnal';
				break;
			
			case 'CS':
				$collection = 'childrens-songbook';
				break;
		}
	}
	return '<a href="http://www.lds.org/music/library/search?lang=eng&collection='.$collection.'&query='.$query.'">'.$title.'</a>';
}
$form = array_filter($_REQUEST);
$date = date('j M Y', strtotime($form['Date']));
?>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<title>Primary Music - <?php echo $date;?></title>
	</head>

	<body class="container printable">
		<a href="https://github.com/curtisgibby/primary-music" class="hidden-print"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png" alt="Fork me on GitHub"></a>

		<div class="page-header">
			<h1><span class="glyphicon glyphicon-music"></span> Primary Music - <?php echo $date;?></h1>
		</div>

		<?php if(!empty($form['WelcomeSong'])) :?>
		<h2>Welcome Song</h2>
		<p><?php echo renderSong($form['WelcomeSong']); ?></p>
		<?php endif;?>

		<?php if(!empty($form['OpeningSong'])) :?>
		<h2>Opening Song</h2>
		<p><?php echo renderSong($form['OpeningSong']); ?></p>
		<?php endif;?>

		<?php if(!empty($form['BirthdaySong'])) :?>
		<h2>Birthday Song</h2>
		<p><?php echo renderSong($form['BirthdaySong']); ?></p>
		<?php endif;?>

		<?php if(!empty($form['ReverenceSong'])) :?>
		<h2>Reverence Song</h2>
		<p><?php echo renderSong($form['ReverenceSong']); ?></p>
		<?php endif;?>

		<?php if(!empty($form['SingingTime'])) :
		$singingTime = array_filter($form['SingingTime']);
		if(!empty($singingTime)):
		?>
		<h2>Singing Time</h2>
		<?php
		foreach ($singingTime as $song) {
			echo "<p>".renderSong($song)."</p>";
		}
		endif; // ! empty singingTime
		endif; // ! empty form singingTime?>

		<?php if(!empty($form['ClosingSong'])) :?>
		<h2>Closing Song</h2>
		<p><?php echo renderSong($form['ClosingSong']); ?></p>
		<?php endif;?>

		<hr>
		<a href="index.php" class="hidden-print"><span class="glyphicon glyphicon-backward"></span> Go Back</a>
	</body>
</html>