<?php

function renderSong($input) {
	$query = $title = $input;
	$page = '';
	$collection = 'music-for-children';

	preg_match('/^\[(\w+) ([0-9]+(–[0-9]+)?)\] /', $input, $matches);

	if(!empty($matches)) {
		$query = $matches[2];
		$page = $matches[0];
		$title = str_replace($page, '', $title);
		switch ($matches[1]) {
			case 'Hymns':
				$collection = 'hymnal';
				break;
			
			case 'CS':
				$collection = 'childrens-songbook';
				break;
		}
	}
	$queryUrl = 'http://www.lds.org/music/library/search?lang=eng&collection='.$collection.'&query='.$query;
	return '<tr>'.
		'<td class="page"><a href="'.$queryUrl.'">'.trim($page).'</a></td>'.
		'<td><a href="'.$queryUrl.'">'.$title.'</a></td>'.
	'</tr>';
}
$pageTitle = 'Primary Music';
$bodyClass = 'container';
$form = array_filter($_REQUEST);
if(isset($form['Date'])) {
	$pageTitle .= ' - '. date('j M Y', strtotime($form['Date']));
	$bodyClass .= ' printable';
}
?>
<html>
	<head>
		<title><?php echo $pageTitle?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/ui-lightness/jquery-ui.min.css" rel="stylesheet" media="screen">
		<link href="css/style.css" rel="stylesheet">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script src="js/script.js"></script>
	</head>

	<body class="<?php echo $bodyClass; ?>">
		<div class="page-header">
			<h1><?php echo $pageTitle?></h1>
		</div>

		<?php if(!empty($form['Date'])) :?>

		<table><tbody>

		<?php if(!empty($form['WelcomeSong'])) :?>
		<tr><td colspan=2><h2>Welcome Song</h2></td></tr>
		<?php echo renderSong($form['WelcomeSong']); ?>
		<?php endif;?>

		<?php if(!empty($form['OpeningSong'])) :?>
		<tr><td colspan=2><h2>Opening Song</h2></td></tr>
		<?php echo renderSong($form['OpeningSong']); ?>
		<?php endif;?>

		<?php if(!empty($form['BirthdaySong'])) :?>
		<tr><td colspan=2><h2>Birthday Song</h2></td></tr>
		<?php echo renderSong($form['BirthdaySong']); ?>
		<?php endif;?>

		<?php if(!empty($form['ReverenceSong'])) :?>
		<tr><td colspan=2><h2>Reverence Song</h2></td></tr>
		<?php echo renderSong($form['ReverenceSong']); ?>
		<?php endif;?>

		<?php if(!empty($form['SingingTime'])) :
		$singingTime = array_filter($form['SingingTime']);
		if(!empty($singingTime)):
		?>
		<tr><td colspan=2><h2>Singing Time</h2></td></tr>
		<?php
		foreach ($singingTime as $song) {
			echo renderSong($song);
		}
		endif; // ! empty singingTime
		endif; // ! empty form singingTime?>

		<?php if(!empty($form['ClosingSong'])) :?>
		<tr><td colspan=2><h2>Closing Song</h2></td></tr>
		<?php echo renderSong($form['ClosingSong']); ?>
		<?php endif;?>

		<?php if(!empty($form['Notes'])) :?>
		<tr><td colspan=2><h2>Notes</h2></td></tr>
		<tr><td colspan=2><?php echo $form['Notes'] ?></tr>
		<?php endif; // ! empty form notes?>

		</tbody></table>
		<hr>
		<a href="index.php" class="hidden-print">&laquo; Go Back</a>

		<?php else :?>

		<div class="form-group clearfix">
			<div class="col-md-9">
				<p>This page is intended to help LDS Primary music leaders select music for their Primary meetings. Choose a date (defaults to "this Sunday"), then tab through the song fields, typing a word or number and picking songs from the pop-up, and submit the form. Then print the results or copy-paste them in an email to your accompanists.</p>

				<form name="music" class="form-horizontal" role="form" action="index.php" method="post">
				<div class="form-group">
				  <div class="col-md-12">
					<label for="Date">Date</label>
					<input type="text" class="form-control" id="Date" value="<?php echo date("m/d/Y", strtotime("this Sunday", (time() - 42300)))?>" name="Date">
				  </div>
				</div>

				<div class="form-group">
				  <div class="col-md-6">
					<label for="WelcomeSong">Welcome Song</label>
					<input type="text" class="form-control auto-complete" id="WelcomeSong" name="WelcomeSong">
				  </div>
				  <div class="col-md-6">
					<label for="OpeningSong">Opening Song</label>
					<input type="text" class="form-control auto-complete" id="OpeningSong" name="OpeningSong">
				  </div>
				</div>
				<div class="form-group">
				  <div class="col-md-6">
					<label for="BirthdaySong">Birthday Song</label>
					<input type="text" class="form-control auto-complete" id="BirthdaySong" name="BirthdaySong">
				  </div>
				  <div class="col-md-6">
					<label for="ReverenceSong">Reverence Song</label>
					<input type="text" class="form-control auto-complete" id="ReverenceSong" name="ReverenceSong">
				  </div>
				</div>

			</div>
			<img src="childrens-songbook.jpg" class="col-md-3">
		</div>

		<h3>Singing Time</h3>
		<div class="form-group">
		  <p>You can enter as many or as few songs in this section as you like.</p>
		  <div class="col-md-4">
			<label for="SingingTime1">#1</label>
			<input type="text" class="form-control auto-complete" id="SingingTime1" name="SingingTime[]">
		  </div>
		  <div class="col-md-4">
			<label for="SingingTime2">#2</label>
			<input type="text" class="form-control auto-complete" id="SingingTime2" name="SingingTime[]">
		  </div>
		  <div class="col-md-4">
			<label for="SingingTime3">#3</label>
			<input type="text" class="form-control auto-complete" id="SingingTime3" name="SingingTime[]">
		  </div>
	  </div>
	  <div class="form-group">
		  <div class="col-md-4">
			<label for="SingingTime4">#4</label>
			<input type="text" class="form-control auto-complete" id="SingingTime4" name="SingingTime[]">
		  </div>
		  <div class="col-md-4">
			<label for="SingingTime5">#5</label>
			<input type="text" class="form-control auto-complete" id="SingingTime5" name="SingingTime[]">
		  </div>
		  <div class="col-md-4">
			<label for="SingingTime6">#6</label>
			<input type="text" class="form-control auto-complete" id="SingingTime6" name="SingingTime[]">
		  </div>
		</div>
		<div class="form-group">
		  <div class="col-md-4">
			<label for="SingingTime7">#7</label>
			<input type="text" class="form-control auto-complete" id="SingingTime7" name="SingingTime[]">
		  </div>
		  <div class="col-md-4">
			<label for="SingingTime8">#8</label>
			<input type="text" class="form-control auto-complete" id="SingingTime8" name="SingingTime[]">
		  </div>
		  <div class="col-md-4">
			<label for="SingingTime9">#9</label>
			<input type="text" class="form-control auto-complete" id="SingingTime9" name="SingingTime[]">
		  </div>
		</div>
		<div class="form-group">
		  <div class="col-md-4">
			<label for="SingingTime10">#10</label>
			<input type="text" class="form-control auto-complete" id="SingingTime10" name="SingingTime[]">
		  </div>
		  <div class="col-md-4">
			<label for="SingingTime11">#11</label>
			<input type="text" class="form-control auto-complete" id="SingingTime11" name="SingingTime[]">
		  </div>
		  <div class="col-md-4">
			<label for="SingingTime12">#12</label>
			<input type="text" class="form-control auto-complete" id="SingingTime12" name="SingingTime[]">
		  </div>
		</div>
		<div class="form-group clearfix">
		  <div class="col-md-6">
			<label for="ClosingSong">Closing Song</label>
			<input type="text" class="form-control auto-complete" id="ClosingSong" name="ClosingSong">
		  </div>
		  <div class="col-md-6">&nbsp;</div>
		</div>

		<div class="form-group clearfix">
			<div class="col-md-12">
				<label for="Notes">Notes</label>
				<textarea rows=6 class="form-control" id="Notes" name="Notes"></textarea>
			</div>
		</div>

		<button type="submit" class="btn btn-default">Submit</button>
		</form>

		<?php endif;?>
	</body>
</html>
