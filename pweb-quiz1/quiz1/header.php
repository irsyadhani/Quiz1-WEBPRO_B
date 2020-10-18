<!DOCTYPE HTML>
<html>
	<head>
	<link rel="shortcut icon" href="images/wajah-2.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Quiz1 | Profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Magnific Popup -->

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<nav id="colorlib-main-nav" role="navigation">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
		<div class="js-fullheight colorlib-table">
			<div class="colorlib-table-cell js-fullheight">
				<div class="row">
					<div class="col-md-12">
						<ul>
							<li
							<?php
								if(@$_GET['p'] == '') {
									echo 'class="active"'; 
								}
							?>
							><a href="index.php">Home</a></li>
							<li
							<?php
								if(@$_GET['p'] == 'quiz1/profile') {
									echo 'class="active"'; 
								}
							?>
							><a href="?p=quiz1/profile">Profile</a></li>
							<li
							<?php
								if(@$_GET['p'] == 'quiz1/hometown') {
									echo 'class="active"'; 
								}
							?>
							><a href="?p=quiz1/hometown">Hometown</a></li>
							<li
							<?php
								if(@$_GET['p'] == 'quiz1/food') {
									echo 'class="active"'; 
								}
							?>
							><a href="?p=quiz1/food">Food</a></li>
							<li
							<?php
								if(@$_GET['p'] == 'quiz1/tourist') {
									echo 'class="active"'; 
								}
							?>
							><a href="?p=quiz1/tourist">Tourists</a></li>
							<li>
							<br>
							<small style="font-size:11px;">
							Submission for Web Programming lecture. <br>
							Irsyadhani Dwi Shubhi <br>
							05111840000022
							</small>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>
	
	<div id="colorlib-page">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="colorlib-navbar-brand">
							<a class="colorlib-logo" href="profile.html"><span>Irs</span><span>yad</span></a>
						</div>
						<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
					</div>
				</div>
			</div>
		</header>