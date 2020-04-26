<?php 
	$fda = 'https://www.accessdata.fda.gov/scripts/interactivenutritionfactslabel/';
?>
<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Boullion Boilerplate</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">

		<link href="https://fonts.googleapis.com/css?family=Archivo+Black|Roboto|Ubuntu&display=swap" rel="stylesheet">

		<script src="https://kit.fontawesome.com/0bc1329b39.js" crossorigin="anonymous"></script>

		<link rel="stylesheet" href="css/dev.css">
	</head>
	<body>
		<!--[if lt IE 9]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<?php include 'components/variables.php'; ?>
				</div>
				<div class="col-md-4">
					<?php include 'components/food-search.php'; ?>
				</div>
				<div class="col-md-4">
					<?php include 'components/food-list.php'; ?>
				</div>
				<div class="col-md-12">
					<?php include 'components/nutritionfacts.php'; ?>
				</div>
			</div>
		</div>
		
		<script
		src="https://code.jquery.com/jquery-3.2.1.min.js"
		integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		crossorigin="anonymous"></script>

		<script src="js/dev.js"></script>

		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<!--
		<script>
			(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
			function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
			e=o.createElement(i);r=o.getElementsByTagName(i)[0];
			e.src='https://www.google-analytics.com/analytics.js';
			r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
			ga('create','UA-XXXXX-X','auto');ga('send','pageview');
		</script>
	-->
	</body>
</html>
