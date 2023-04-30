<?php
session_start();
DEFINE('COOKIE_PREFIX', 'primary_music_planner_');
$form = array_filter($_REQUEST);

$language = 'en';
$availableLanguages = array(
	'en' => 'English',
	'de' => 'German (deutsch)',
	'es' => 'Spanish (español)',
	'fr' => 'French (français)',
	'it' => 'Italian (italiano)',
	'pt' => 'Portuguese (português)',
);
$preferredLanguages = _getLanguagesFromHTTPHeader();

if (!empty($_COOKIE['primary_music_planner_Language'])) {
	$preferredLanguages = array($_COOKIE['primary_music_planner_Language']);
}

if (!empty($form['language'])) {
	$preferredLanguages = array($form['language']);
}

foreach ($preferredLanguages as $preferredLanguage) {
	if (array_key_exists($preferredLanguage, $availableLanguages)) {
		$language = $preferredLanguage;
		break;
	}
}
require_once 'locale/' . $language . '.php';

function _getLanguagesFromHTTPHeader() {
	$languages = array();
	if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
		// break up string into pieces (languages and q factors)
		preg_match_all('/([a-z]{1,8}(-[a-z]{1,8})?)\s*(;\s*q\s*=\s*(1|0\.[0-9]+))?/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $langParse);

		if (count($langParse[1])) {
			// create a list like 'en' => 0.8
			$languageRegions = array_combine($langParse[1], $langParse[4]);

			// set default to 1 for any without q factor
			foreach ($languageRegions as $key => $val) {
				if ($val === '') {
					$languageRegions[$key] = 1;
				}
			}

			// sort list based on value, higher values first
			arsort($languageRegions, SORT_NUMERIC);
			//Now we don't care about the actual numeric rankings, just
			//that the languages are in preferred order
			foreach($languageRegions as $language => $ignoreRankingNow) {
				//Don't care about regions ('en' vs 'en-us')
				$languages[] = strtolower(substr($language, 0, 2));
			}
		}
	}
	return $languages;
}

function renderSong($input, $includes) {
	$query = $title = $input;
	$page = '';

	preg_match('/^\[(\w+) ([0-9]+(–[0-9]+)?)\] /', $input, $matches);

	$collection = $includes['collections']['default'];
	if(!empty($matches)) {
		$query = $matches[2];
		$page = $matches[0];
		$title = str_replace($page, '', $title);
		if (array_key_exists($matches[1], $includes['collections'])) {
			$collection = $includes['collections'][$matches[1]];
		}
	}
	$queryUrl = 'http://www.lds.org/music/library/search?lang=' . $includes['language_code'] . '&collection=' . $collection . '&query=' . $query;
	return '<tr>' .
		'<td class="page"><a href="' . htmlentities($queryUrl, ENT_QUOTES, 'utf-8') . '">' . htmlentities(trim($page), ENT_QUOTES, 'utf-8') . '</a></td>' .
		'<td><a href="' . htmlentities($queryUrl, ENT_QUOTES, 'utf-8') . '">' . htmlentities($title, ENT_QUOTES, 'utf-8') . '</a></td>'.
	'</tr>';
}

function resetForm($class = '') {
	return '
	<form action="index.php" method="post" class="' . $class . '">
		<input type="hidden" name="reset" value="reset">
		<button type="submit" class="btn btn-danger btn-sm pull-right hidden-print" onclick="return confirm(\'' . addslashes($includes['labels']['LABEL_RESET_CONFIRM']) . '\');"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> ' . $includes['labels']['LABEL_RESET'] . '</button>
	</form>';
}

function singingTimeInput($index) {
	return '
	<div class="col-md-4">
		<label for="SingingTime' . ($index + 1) . '">#' . ($index + 1). '</label>
		<input type="text" class="form-control auto-complete" id="SingingTime' . ($index + 1) . '" name="SingingTime[]" value="' . (!empty($_SESSION['form']['SingingTime'][$index]) ? htmlentities($_SESSION['form']['SingingTime'][$index], ENT_QUOTES, 'utf-8') : '') . '">
	</div>';
}

function optionSelect($name = 'SongA', $defaultOption = 'OPTION_OPENING') {
	$selectedOption = $defaultOption;
	$label = $name . 'Label';
	if (!empty($_COOKIE[COOKIE_PREFIX . $label]) && in_array(COOKIE_PREFIX . $label, $includes['options']) !== false) {
		$selectedOption = $_COOKIE[COOKIE_PREFIX . $label];
	}

	if (!empty($_SESSION['form'][$label]) && in_array(COOKIE_PREFIX . $label, $includes['options']) !== false) {
		$selectedOption = $_SESSION['form'][$label];
	}

	echo '<select name="'. $name . 'Label" class="song-label">';
	foreach ($includes['options'] as $optionKey => $option) {
		$selected = '';
		if ($optionKey == $selectedOption || $option == $selectedOption) {
			$selected = ' selected="selected"';
		}
		echo '<option' . $selected . '>' . $option . '</option>';
	}
	echo "</select>";
}

define('SAVE_FILEPATH', __DIR__ . DIRECTORY_SEPARATOR . 'saved' . DIRECTORY_SEPARATOR);

$fromFile = false;
if (!empty($form['hash'])) {
	$filename = SAVE_FILEPATH . $form['hash'];
	unset($form['hash']);
	$errorMessage = 'Invalid save file';
	if (file_exists($filename)) {
		$contents = file_get_contents($filename);
		$form = unserialize($contents);
		if (is_array($form)) {
			$_SESSION['form'] = $form;
			$fromFile = true;
			$errorMessage = '';
			if (!empty($form['Language'])) {
				$language = $form['Language'];
				require_once 'locale/' . $language . '.php';
			}
		}
	}
}

$pageTitle = $includes['labels']['LABEL_PAGE_TITLE'];
$bodyClass = 'container';

if (!empty($form['reset'])) {
	session_unset();
	header('Location: ' . str_replace('&reset=1', '', 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']));
}

if (!empty($form['Date']) && !$fromFile) {
	$_SESSION['form'] = $form;

	$cookieFields = array(
		'Language',
		'SongALabel',
		'SongBLabel',
		'SongCLabel',
		'SongDLabel',
		'SongELabel',
		'SongFLabel',
		'SongGLabel',
	);

	foreach ($cookieFields as $cookieField) {
		setcookie(
			COOKIE_PREFIX . $cookieField,
			$form[$cookieField],
			2147483647 // just before Y2038 bug hits
		);
	}

	$serialized = serialize($form);
	$md5 = md5($serialized . time());
	$filepath = SAVE_FILEPATH . $md5;
	$f = fopen($filepath, 'w');
	fwrite($f, $serialized);
	fclose($f);

	// redirect to result page
	header('Location: ' . basename(__FILE__) . '?hash=' . $md5);
	exit();
}
$qrCode = '';
$headerScript = '<script src="js/locale/' . $language . '.js"></script>
<script src="js/locale/datepicker-' . $language . '.js"></script>';
if(isset($form['Date'])) {
	setlocale(LC_TIME, $includes['locale']);
	$pageTitle .= ' - ' . strftime('%d %B %Y (%Y-%m-%d)', strtotime($form['Date']));
	$bodyClass .= ' printable';
	$currentUrl = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	$qrCode = '<img src="http://api.qrserver.com/v1/create-qr-code/?color=000000&amp;bgcolor=FFFFFF&amp;data=' . urlencode($currentUrl) . '&amp;qzone=1&amp;margin=0&amp;size=100x100&amp;ecc=L" alt="qr code" class="pull-right"/>';
	$headerScript = '<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "fad20de0-c042-4748-835f-44d7d3ace9df", doNotHash: true, doNotCopy: true, hashAddressBar: false});</script>';
}
?>
<html>
	<head>
		<title><?php echo $pageTitle?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.min.css" rel="stylesheet" media="screen">
		<link href="css/style.min.css" rel="stylesheet">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<?php echo $headerScript; ?>
		<script src="js/script.min.js"></script>
		<script src="js/ext-jquery-ui.min.js"></script>
	</head>

	<body class="<?php echo $bodyClass; ?>">
		<?php echo $qrCode; ?>
		<div class="page-header">
			<h1><?php echo $pageTitle?></h1>
		</div>

		<?php if(!empty($form['Date'])) :?>

		<table><tbody>

		<?php if(!empty($form['SongA'])) :?>
			<?php if(!empty($form['SongALabel'])) :?>
			<tr><td colspan=2><h2><?php echo htmlentities($form['SongALabel'], ENT_QUOTES, 'utf-8'); ?></h2></td></tr>
			<?php endif;?>
		<?php echo renderSong($form['SongA'], $includes); ?>
		<?php endif;?>

		<?php if(!empty($form['SongB'])) :?>
			<?php if(!empty($form['SongBLabel'])) :?>
			<tr><td colspan=2><h2><?php echo htmlentities($form['SongBLabel'], ENT_QUOTES, 'utf-8'); ?></h2></td></tr>
			<?php endif;?>
		<?php echo renderSong($form['SongB'], $includes); ?>
		<?php endif;?>

		<?php if(!empty($form['SongC'])) :?>
			<?php if(!empty($form['SongCLabel'])) :?>
			<tr><td colspan=2><h2><?php echo htmlentities($form['SongCLabel'], ENT_QUOTES, 'utf-8'); ?></h2></td></tr>
			<?php endif;?>
		<?php echo renderSong($form['SongC'], $includes); ?>
		<?php endif;?>

		<?php if(!empty($form['SongD'])) :?>
			<?php if(!empty($form['SongDLabel'])) :?>
			<tr><td colspan=2><h2><?php echo htmlentities($form['SongDLabel'], ENT_QUOTES, 'utf-8'); ?></h2></td></tr>
			<?php endif;?>
		<?php echo renderSong($form['SongD'], $includes); ?>
		<?php endif;?>

		<?php if(!empty($form['SongE'])) :?>
			<?php if(!empty($form['SongELabel'])) :?>
			<tr><td colspan=2><h2><?php echo htmlentities($form['SongELabel'], ENT_QUOTES, 'utf-8'); ?></h2></td></tr>
			<?php endif;?>
		<?php echo renderSong($form['SongE'], $includes); ?>
		<?php endif;?>

		<?php if(!empty($form['SongF'])) :?>
			<?php if(!empty($form['SongFLabel'])) :?>
			<tr><td colspan=2><h2><?php echo htmlentities($form['SongFLabel'], ENT_QUOTES, 'utf-8'); ?></h2></td></tr>
			<?php endif;?>
		<?php echo renderSong($form['SongF'], $includes); ?>
		<?php endif;?>

		<?php if(!empty($form['SingingTime'])) :
		$singingTime = array_filter($form['SingingTime']);
		if(!empty($singingTime)):
		?>
		<tr><td colspan=2><h2><?= $includes['labels']['LABEL_SINGING_TIME'] ?></h2></td></tr>
		<?php
		foreach ($singingTime as $song) {
			echo renderSong($song, $includes);
		}
		endif; // ! empty singingTime
		endif; // ! empty form singingTime?>

		<?php if(!empty($form['SongG'])) :?>
			<?php if(!empty($form['SongGLabel'])) :?>
			<tr><td colspan=2><h2><?php echo htmlentities($form['SongGLabel'], ENT_QUOTES, 'utf-8'); ?></h2></td></tr>
			<?php endif;?>
		<?php echo renderSong($form['SongG'], $includes); ?>
		<?php endif;?>

		<?php if(!empty($form['Notes'])) :?>
		<tr><td colspan=2><h2><?= $includes['labels']['LABEL_NOTES'] ?></h2></td></tr>
		<tr><td colspan=2><?php echo nl2br(htmlentities($form['Notes'], ENT_QUOTES, 'utf-8')); ?></tr>
		<?php endif; // ! empty form notes?>

		</tbody></table>
		<hr>
		<a href="index.php" class="hidden-print pull-left">&laquo; <?= $includes['labels']['LABEL_BACK'] ?></a>
		<?php echo resetForm(); ?>

		<div class="hidden-print share clearfix">
			<h2><?= $includes['labels']['LABEL_SHARE'] ?></h2>
			<input type="text" class="form-control" value="<?php echo $currentUrl;?>">
			<span class='st_facebook' displayText='Facebook'></span>
			<span class='st_twitter' displayText='Tweet'></span>
			<span class='st_linkedin' displayText='LinkedIn'></span>
			<span class='st_pinterest' displayText='Pinterest'></span>
			<span class='st_email' displayText='Email'></span>
		</div>

		<?php else :?>
		<?php
		$selectedDate = strtotime('this Sunday', (time() - 42300));
		if (!empty($_SESSION['form']['Date'])) {
			$selectedDate = strtotime($_SESSION['form']['Date']);
		}
		?>

		<div class="form-group clearfix">
			<div class="col-md-9">
				<p><?= $includes['labels']['LABEL_EXPLANATION'] ?></p>

				<?php
				if (!empty($errorMessage)) {
					echo '<p class="alert alert-danger">' . $errorMessage . '</p>';
				}
				echo resetForm(); ?>

				<form name="music" class="form-horizontal" role="form" action="index.php" method="post">
				<button type="submit" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-share" aria-hidden="true"></span> <?= $includes['labels']['LABEL_SUBMIT'] ?></button>
				<div class="form-group">
					<div class="col-md-9">
						<label for="Date"><?= $includes['labels']['LABEL_DATE'] ?></label>
						<input type="text" class="form-control" id="Date" value="<?php echo date('Y-m-d', $selectedDate)?>" name="Date">
					</div>
					<div class="col-md-3">
						<label for="Language"><?= $includes['labels']['LABEL_LANGUAGE'] ?></label>
						<?php
						echo '<select id="Language" name="Language" class="form-control">';
						foreach ($availableLanguages as $code => $title) {
							$selected = '';
							if ($language == $code) {
								$selected = ' selected="selected"';
							}
							echo '<option value="' . $code . '"' . $selected . '>' . $title . '</option>';
						}
						echo "</select>";
						?>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-6">
					<?php echo optionSelect('SongA', 'OPTION_WELCOME') ?>
					<input type="text" class="form-control auto-complete" id="SongA" name="SongA" value="<?php echo !empty($_SESSION['form']['SongA']) ? htmlentities($_SESSION['form']['SongA'], ENT_QUOTES, 'utf-8') : ''; ?>">
					</div>
					<div class="col-md-6">
					<?php echo optionSelect('SongB', 'OPTION_OPENING') ?>
					<input type="text" class="form-control auto-complete" id="SongB" name="SongB" value="<?php echo !empty($_SESSION['form']['SongB']) ? htmlentities($_SESSION['form']['SongB'], ENT_QUOTES, 'utf-8') : ''; ?>">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-6">
					<?php echo optionSelect('SongC', 'OPTION_BIRTHDAY') ?>
					<input type="text" class="form-control auto-complete" id="SongC" name="SongC" value="<?php echo !empty($_SESSION['form']['SongC']) ? htmlentities($_SESSION['form']['SongC'], ENT_QUOTES, 'utf-8') : ''; ?>">
					</div>
					<div class="col-md-6">
					<?php echo optionSelect('SongD', 'OPTION_REVERENCE') ?>
					<input type="text" class="form-control auto-complete" id="SongD" name="SongD" value="<?php echo !empty($_SESSION['form']['SongD']) ? htmlentities($_SESSION['form']['SongD'], ENT_QUOTES, 'utf-8') : ''; ?>">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-6">
					<?php echo optionSelect('SongE', 'OPTION_SHARING') ?>
					<input type="text" class="form-control auto-complete" id="SongE" name="SongE" value="<?php echo !empty($_SESSION['form']['SongE']) ? htmlentities($_SESSION['form']['SongE'], ENT_QUOTES, 'utf-8') : ''; ?>">
					</div>
					<div class="col-md-6">
					<?php echo optionSelect('SongF', 'OPTION_WIGGLE') ?>
					<input type="text" class="form-control auto-complete" id="SongF" name="SongF" value="<?php echo !empty($_SESSION['form']['SongF']) ? htmlentities($_SESSION['form']['SongF'], ENT_QUOTES, 'utf-8') : ''; ?>">
					</div>
				</div>

			</div>
			<img src="img/songbook-<?php echo $language;?>.jpg" class="col-md-3 hidden-xs">
		</div>

		<h3><?= $includes['labels']['LABEL_SINGING_TIME'] ?></h3>
		<div class="form-group">
			<p><?= $includes['labels']['LABEL_SINGING_TIME_EXPLANATION'] ?></p>
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
			<?php echo optionSelect('SongG', 'OPTION_CLOSING') ?>
			<input type="text" class="form-control auto-complete" id="SongG" name="SongG" value="<?php echo !empty($_SESSION['form']['SongG']) ? htmlentities($_SESSION['form']['SongG'], ENT_QUOTES, 'utf-8') : ''; ?>">
			</div>
			<div class="col-md-6">&nbsp;</div>
		</div>

		<div class="form-group clearfix">
			<div class="col-md-12">
				<label for="Notes"><?= $includes['labels']['LABEL_NOTES'] ?></label>
				<textarea rows=6 class="form-control" id="Notes" name="Notes"><?php echo !empty($_SESSION['form']['Notes']) ? htmlentities($_SESSION['form']['Notes'], ENT_QUOTES, 'utf-8') : ''; ?></textarea>
			</div>
		</div>

		<button type="submit" class="btn btn-primary btn-lg pull-left"><span class="glyphicon glyphicon-share" aria-hidden="true"></span> <?= $includes['labels']['LABEL_SUBMIT'] ?></button>
		</form>
		<?php echo resetForm('clearfix'); ?>

		<script>
		(function () {
			var printMessage = <?= json_encode($includes['labels']['LABEL_NO_PRINT']); ?>;
			if("onbeforeprint"in window)window.onbeforeprint=function(){window.alert(printMessage)};else if(window.matchMedia){var mqList=window.matchMedia("print");mqList.addListener(function(a){a.matches&&window.alert(printMessage)})}else!function(a){window.print=function(){window.alert(printMessage),a()}}(window.print);
		})();
		</script>

		<?php endif;?>

		<footer class='hidden-print'><div class="container"><?= $includes['labels']['LABEL_NOT_OFFICIAL'] ?></div></footer>
<?php include('../include/google-analytics.inc'); ?>
	</body>
</html>
