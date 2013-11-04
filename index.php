<html>
	<head>
		<title>Primary Music</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/ui-lightness/jquery-ui.min.css" rel="stylesheet" media="screen">
		<link href="css/style.css" rel="stylesheet">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script src="js/script.js"></script>
	</head>

	<body class="container">
		<a href="https://github.com/curtisgibby/primary-music" class="hidden-print"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png" alt="Fork me on GitHub"></a>

		<div class="page-header">
			<h1><span class="glyphicon glyphicon-music"></span> Primary Music</h1>
		</div>

		<div class="form-group clearfix">
			<div class="col-md-9">
				<p>This page is intended to help LDS Primary music leaders select music for their Primary meetings. Choose a date (defaults to "Next Sunday"), then tab through the song fields, typing a word or number and picking songs from the pop-up, and submit the form. Then print the results or copy-paste them in an email to your accompanists. You can enter as many or as few songs in the Singing Time section as you like.</p>

				<form name="music" class="form-horizontal" role="form" action="post.php" method="post">
				<div class="form-group">
				  <div class="col-md-12">
					<label for="Date">Date</label>
					<input type="text" class="form-control" id="Date" value="<?php echo date("m/d/Y", strtotime("Next Sunday"))?>" name="Date">
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

		<button type="submit" class="btn btn-default">Submit</button>
		</form>

<?php include('../include/google-analytics.inc'); ?>
	</body>
</html>
