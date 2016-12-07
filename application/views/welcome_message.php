<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>ModCult</title>

	<!-- Included Bootstrap CSS Files -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Just include this Css file -->
	<link rel="stylesheet" href="css/jquery.carousel.fullscreen.css" />

	<link rel="stylesheet" href="css/mystyles.css" />

</head>
<body class="home">

	<div class="global-bar">
		<div class="container parent full-width">
			<div class="row">
				<div class="topBar">
				</div>
			</div><!-- END of Row -->
		</div><!-- END of Container -->
	</div><!-- END of Global Bar -->

	<!-- This is a typical Twitter Bootstrap Carousel -->
	<!-- Carousel -->
	<div id="homeCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#homeCarousel" data-slide-to="1"></li>
			<li data-target="#homeCarousel" data-slide-to="2"></li>
			<li data-target="#homeCarousel" data-slide-to="3"></li>
			<li data-target="#homeCarousel" data-slide-to="4"></li>
			<li data-target="#homeCarousel" data-slide-to="5"></li>
			<li data-target="#homeCarousel" data-slide-to="6"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="images/01.jpg" alt="" />
				<div class="container">
					<div class="carousel-caption">
					</div>
				</div>
			</div>

			<div class="item">
				<img src="images/1.jpg" alt="" />
				<div class="container">
					<div class="carousel-caption">
					</div>
				</div>
			</div>

			<div class="item">
				<img src="images/2.jpg" alt="" />
				<div class="container">
					<div class="carousel-caption">
					</div>
				</div>
			</div>

			<div class="item">
				<img src="images/3.jpg" alt="" />
				<div class="container">
					<div class="carousel-caption">
					</div>
				</div>
			</div>

			<div class="item">
				<img src="images/4.jpg" alt="" />
				<div class="container">
					<div class="carousel-caption">
					</div>
				</div>
			</div>

			<div class="item">
				<img src="images/5.jpg" alt="" />
				<div class="container">
					<div class="carousel-caption">
					</div>
				</div>
			</div>

			<div class="item">
				<img src="images/6.jpg" alt="" />
				<div class="container">
					<div class="carousel-caption">
					</div>
				</div>
			</div>

		</div>

	</div>

	<div class="global-bar">
		<div class="container parent full-width">
			<div class="row">
				<div class="topBar">
				</div>
			</div><!-- END of Row -->
		</div><!-- END of Container -->
	</div><!-- END of Global Bar -->

	<div class="container parent">
		<div class="row">
			<!-- Left Sidebar START -->
			<div class="col-xs-2 leftBar alpha omega" style="height: 576px; ">
				<h2 class="logo" style="background: url('images/favicon.ico') no-repeat;"><a href=""></a></h2>

				<ul class="navigation">
					<li id="council_home" class="parent"><a href="">Home</a></li>
					<li id="council_clubs" class="parent has-sub"><a href="">Clubs</a>
						<ul class="sub-menu col-xs-10	 alpha omega">
							<li id="music"><a href="">Music</a></li>
							<li id="dance"><a href="">Dance</a></li>
							<li id="dramatics"><a href="">Dramatics</a></li>
						</ul>
					</li>

					<li id="council_sac_facilities" class="parent"><a href="">Sac Facilities</a></li>
					<li id="page_schedule" class="parent"><a href="">Schedule</a></li>
					<li id="page_team" class="parent"><a href="">Team</a></li>
					<li id="page_gallery" class="parent"><a href="">Gallery</a></li>

				</ul>

			</div>
			<!-- Left Sidebar END -->
		</div><!-- END of Row -->
	</div><!-- END of Container -->


	    <!-- Bottom Area START -->
	    <div class="bottomArea">
	    <div class="container parent full-width">
	        <div class="row">
						<div class="bottomBar">
						</div>
	        </div><!-- END of Row -->
	      </div><!-- END of Container -->
	    </div>

	<script src="js/myjs.js"></script>
	<script src="js/jQuery/jquery.min.js"></script>
	<!--<script src="js/jquery-1.10.0.min.js"></script> -->
	<script src="js/bootstrap.min.js"></script>

	<!-- Just include this Js file -->
	<script src="js/jquery.carousel.fullscreen.js"></script>
	<script src="js/jQuery/jquery.hoverIntent.minified.js"></script>
	<script src="js/myjs.js"></script>
</body>
</html>
