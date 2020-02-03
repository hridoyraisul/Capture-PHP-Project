<?php
session_start();
include "connect.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CAPTURE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>


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
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/style.css">
     <style> 
       #button{
             text-align: center;
       }

     </style>

	<!-- Modernizr JS -->
	</head>
	<body style="background-color: #71C7C8   ">
	<nav id="colorlib-main-nav" role="navigation">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
		<div class="js-fullheight colorlib-table">
			<div class="colorlib-table-cell js-fullheight">
				<div class="row">
					<div class="col-md-12">
						<ul>
							<li class="active"><a href="home.php">Home</a></li>
							<li><a href="gallery.php">Gallery</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="about.php">About</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>
	</nav>
	<div id="colorlib-page">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="colorlib-navbar-brand">
							<a class="colorlib-logo" href="#"><span>R</span><span>H</span></a>
						
						</div>
						<div id="button">

							<p class="btn btn-primary btn-outline" align="text-center">Home</p> 
							<a href="gallery.php"><p class="btn btn-primary btn-outline" align="text-center">Gallery</p></a>
							<p class="btn btn-primary btn-outline" align="text-center">Contact</p>
							<a href="about.php"><p class="btn btn-primary btn-outline" align="text-center">About us</p></a>
						</div>
			
					</div>
				</div>
			</div>
		</header>

		<div id="colorlib-about">
			<div class="container">
			
				<div class="row">
					<div class="col-md-5 animate-box">
						<div class="owl-carousel3">
							<div class="item">
								<img class="img-responsive about-img" src="images/bg1.jpg">
							</div>
							<div class="item">
								<img class="img-responsive about-img" src="images/bg2.jpg">
							</div>
						</div>
					</div>
					<div class="col-md-6 col-md-push-1 animate-box">
						<div class="about-desc">
							<div class="owl-carousel3">
								<div class="item">
									<h2><span>Welcome</span><span><?php 
									$name = $_GET['name'];

									echo ucfirst($name); ?></span></h2>
								</div>
							</div>
							<div class="desc">
								<div class="rotate">
									<h2 class="heading">CAPTURE</h2>
								</div>
								<h1 style="color: green">CAPTURE</h1>
								<p style="color: black">“Photography is a way of feeling, of touching, of loving. What you have caught on film is captured forever… It remembers little things, long after you have forgotten everything.”
								<br>– Aaron Siskind</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="colorlib-services">
			<div class="container">
				<div class="row text-center">
					<h2 class="bold">CAPTURE</h2>
					
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<div class="services-flex">
							<div class="one-third">
								<div class="row">
									
								</div>
								<div class="row">
									<div class="col-md-12">
									</div>
									
						
								</div>
							</div>
							<div class="one-forth services-img" style="background-image: url(‪image/bg1.jpg);">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>

