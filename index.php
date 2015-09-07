<?php
session_start();
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

function resetForm() {
	return '
	<form action="index.php" method="post">
		<input type="hidden" name="reset" value="reset">
		<button type="submit" class="btn btn-danger pull-right hidden-print">Reset</button>
	</form>';
}

function singingTimeInput($index) {
	return '
	<div class="col-md-4">
		<label for="SingingTime' . ($index + 1) . '">#' . ($index + 1). '</label>
		<input type="text" class="form-control auto-complete" id="SingingTime' . ($index + 1) . '" name="SingingTime[]" value="' . (!empty($_SESSION['form']['SingingTime'][$index]) ? $_SESSION['form']['SingingTime'][$index] : '') . '">
	</div>';
}

function labelSelect($name = 'SongA', $defaultLabel = 'Opening Song') {
	$selectedLabel = $defaultLabel;
	if (!empty($_SESSION['form'][$name . 'Label'])) {
		$selectedLabel = $_SESSION['form'][$name . 'Label'];
	}
	echo '<select name="'. $name . 'Label" class="song-label">';
	$labels = array(
		'Prelude Song',
		'Welcome Song',
		'Opening Song',
		'Birthday Song',
		'Baptism Song',
		'Article of Faith Song',
		'Scripture Song',
		'Sharing Time Song',
		'Reverence Song',
		'Wiggle Song',
		'Closing Song',
	);
	foreach ($labels as $label) {
		$selected = '';
		if ($label == $selectedLabel) {
			$selected = ' selected="selected"';
		}
		echo '<option' . $selected . '>' . $label . '</option>';
	}
	echo "</select>";
}
$pageTitle = 'Primary Music Planner';
$bodyClass = 'container';
$form = array_filter($_REQUEST);

if (!empty($form['reset'])) {
	unset($form);
	session_unset();
}

if (!empty($form)) {
	$_SESSION['form'] = $form;
}
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
		<link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.min.css" rel="stylesheet" media="screen">
		<link href="css/style.css" rel="stylesheet">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script src="js/script.min.js"></script>
		<script src="js/ext-jquery-ui.min.js"></script>
	</head>

	<body class="<?php echo $bodyClass; ?>">
		<div class="page-header">
			<h1><?php echo $pageTitle?></h1>
		</div>

		<?php if(!empty($form['Date'])) :?>

		<table><tbody>

		<?php if(!empty($form['SongA'])) :?>
			<?php if(!empty($form['SongALabel'])) :?>
			<tr><td colspan=2><h2><?php echo $form['SongALabel'] ?></h2></td></tr>
			<?php endif;?>
		<?php echo renderSong($form['SongA']); ?>
		<?php endif;?>

		<?php if(!empty($form['SongB'])) :?>
			<?php if(!empty($form['SongBLabel'])) :?>
			<tr><td colspan=2><h2><?php echo $form['SongBLabel'] ?></h2></td></tr>
			<?php endif;?>
		<?php echo renderSong($form['SongB']); ?>
		<?php endif;?>

		<?php if(!empty($form['SongC'])) :?>
			<?php if(!empty($form['SongCLabel'])) :?>
			<tr><td colspan=2><h2><?php echo $form['SongCLabel'] ?></h2></td></tr>
			<?php endif;?>
		<?php echo renderSong($form['SongC']); ?>
		<?php endif;?>

		<?php if(!empty($form['SongD'])) :?>
			<?php if(!empty($form['SongDLabel'])) :?>
			<tr><td colspan=2><h2><?php echo $form['SongDLabel'] ?></h2></td></tr>
			<?php endif;?>
		<?php echo renderSong($form['SongD']); ?>
		<?php endif;?>

		<?php if(!empty($form['SongE'])) :?>
			<?php if(!empty($form['SongELabel'])) :?>
			<tr><td colspan=2><h2><?php echo $form['SongELabel'] ?></h2></td></tr>
			<?php endif;?>
		<?php echo renderSong($form['SongE']); ?>
		<?php endif;?>

		<?php if(!empty($form['SongF'])) :?>
			<?php if(!empty($form['SongFLabel'])) :?>
			<tr><td colspan=2><h2><?php echo $form['SongFLabel'] ?></h2></td></tr>
			<?php endif;?>
		<?php echo renderSong($form['SongF']); ?>
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

		<?php if(!empty($form['SongG'])) :?>
			<?php if(!empty($form['SongGLabel'])) :?>
			<tr><td colspan=2><h2><?php echo $form['SongGLabel'] ?></h2></td></tr>
			<?php endif;?>
		<?php echo renderSong($form['SongG']); ?>
		<?php endif;?>

		<?php if(!empty($form['Notes'])) :?>
		<tr><td colspan=2><h2>Notes</h2></td></tr>
		<tr><td colspan=2><?php echo nl2br($form['Notes']) ?></tr>
		<?php endif; // ! empty form notes?>

		</tbody></table>
		<hr>
		<a href="index.php" class="hidden-print pull-left">&laquo; Go Back</a>
		<?php echo resetForm(); ?>

		<?php else :?>
		<?php
		$selectedDate = strtotime('this Sunday', (time() - 42300));
		if (!empty($_SESSION['form']['Date'])) {
			$selectedDate = strtotime($_SESSION['form']['Date']);
		}
		?>

		<div class="form-group clearfix">
			<div class="col-md-9">
				<p>This page is intended to help LDS Primary music leaders select music for their Primary meetings. Choose a date (defaults to "this Sunday"), then tab through the song fields, typing a word or number and picking songs from the pop-up, and submit the form. Then print the results or copy-paste them in an email to your accompanists.</p>

				<?php echo resetForm(); ?>

				<form name="music" class="form-horizontal" role="form" action="index.php" method="post">
				<button type="submit" class="btn btn-primary">Submit</button>
				<div class="form-group">
					<div class="col-md-12">
					<label for="Date">Date</label>
					<input type="text" class="form-control" id="Date" value="<?php echo date('m/d/Y', $selectedDate)?>" name="Date">
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-6">
					<?php echo labelSelect('SongA', 'Welcome Song') ?>
					<input type="text" class="form-control auto-complete" id="SongA" name="SongA" value="<?php echo !empty($_SESSION['form']['SongA']) ? $_SESSION['form']['SongA'] : ''; ?>">
					</div>
					<div class="col-md-6">
					<?php echo labelSelect('SongB', 'Opening Song') ?>
					<input type="text" class="form-control auto-complete" id="SongB" name="SongB" value="<?php echo !empty($_SESSION['form']['SongB']) ? $_SESSION['form']['SongB'] : ''; ?>">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-6">
					<?php echo labelSelect('SongC', 'Birthday Song') ?>
					<input type="text" class="form-control auto-complete" id="SongC" name="SongC" value="<?php echo !empty($_SESSION['form']['SongC']) ? $_SESSION['form']['SongC'] : ''; ?>">
					</div>
					<div class="col-md-6">
					<?php echo labelSelect('SongD', 'Reverence Song') ?>
					<input type="text" class="form-control auto-complete" id="SongD" name="SongD" value="<?php echo !empty($_SESSION['form']['SongD']) ? $_SESSION['form']['SongD'] : ''; ?>">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-6">
					<?php echo labelSelect('SongE', 'Sharing Time Song') ?>
					<input type="text" class="form-control auto-complete" id="SongE" name="SongE" value="<?php echo !empty($_SESSION['form']['SongE']) ? $_SESSION['form']['SongE'] : ''; ?>">
					</div>
					<div class="col-md-6">
					<?php echo labelSelect('SongF', 'Wiggle Song') ?>
					<input type="text" class="form-control auto-complete" id="SongF" name="SongF" value="<?php echo !empty($_SESSION['form']['SongF']) ? $_SESSION['form']['SongF'] : ''; ?>">
					</div>
				</div>

			</div>
			<img src="childrens-songbook.jpg" class="col-md-3">
		</div>

		<h3>Singing Time</h3>
		<div class="form-group">
			<p>You can enter as many or as few songs in this section as you like.</p>
			<?php
			$index = 0;
			echo singingTimeInput($index++);
			echo singingTimeInput($index++);
			echo singingTimeInput($index++);
			?>
		</div>
		<div class="form-group">
		<?php
			echo singingTimeInput($index++);
			echo singingTimeInput($index++);
			echo singingTimeInput($index++);
		?>
		</div>
		<div class="form-group">
		<?php
			echo singingTimeInput($index++);
			echo singingTimeInput($index++);
			echo singingTimeInput($index++);
		?>
		</div>
		<div class="form-group">
		<?php
			echo singingTimeInput($index++);
			echo singingTimeInput($index++);
			echo singingTimeInput($index++);
		?>
		</div>
		<div class="form-group clearfix">
			<div class="col-md-6">
			<?php echo labelSelect('SongG', 'Closing Song') ?>
			<input type="text" class="form-control auto-complete" id="SongG" name="SongG" value="<?php echo !empty($_SESSION['form']['SongG']) ? $_SESSION['form']['SongG'] : ''; ?>">
			</div>
			<div class="col-md-6">&nbsp;</div>
		</div>

		<div class="form-group clearfix">
			<div class="col-md-12">
				<label for="Notes">Notes</label>
				<textarea rows=6 class="form-control" id="Notes" name="Notes"><?php echo !empty($_SESSION['form']['Notes']) ? $_SESSION['form']['Notes'] : ''; ?></textarea>
			</div>
		</div>

		<button type="submit" class="btn btn-primary pull-left">Submit</button>
		</form>
		<?php echo resetForm(); ?>

		<script>
		(function () {
			var printMessage = 'You probably do not want to print this page. Rather, cancel the printing and hit the submit button to get a nice page formatted for printing.';
			if ("onbeforeprint" in window) {
				window.onbeforeprint = function () {
					window.alert(printMessage);
				}
			}

			else if (window.matchMedia) {
				var mqList = window.matchMedia("print");
				mqList.addListener(function (mql) {
					if(mql.matches) {
						window.alert(printMessage);
					};
				});
			}

			else {
				(function (oldPrint) {
					window.print = function () {
						window.alert(printMessage);
						oldPrint();
					}
				})(window.print);
			}
		})();
		</script>

		<?php endif;?>
	</body>
</html>
