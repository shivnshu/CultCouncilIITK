<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head
		content must come *after* these tags -->

	<title>CulturalCouncil IITK</title>

	<link rel="icon" href="<?=base_url()?>/images/favicon.ico" type="image/ico" >

	<!-- Included Bootstrap CSS Files -->
	<link rel="stylesheet" href="<?=base_url()?>/css/bootstrap.min.css" />

	<link href="<?=base_url()?>/css/font-awesome.min.css" rel="stylesheet">

	<link href="<?=base_url()?>/css/bootstrap-social.css" rel="stylesheet">

	<!-- Just include this Css file -->
	<link rel="stylesheet" href="<?=base_url()?>/css/jquery.carousel.fullscreen.css" />

	<link rel="stylesheet" href="<?=base_url()?>/css/mystyles.css" />

	<!--Animate.css-->
	<link rel="stylesheet" href="<?=base_url()?>/css/animate.css" />

	<!--For Gallery -->
	<link rel="stylesheet" href="<?=base_url()?>/css/swipebox.min.css">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

</head>
<body>

	<!-- This is a typical Twitter Bootstrap Carousel -->
	<!-- Carousel -->
	<div id="homeCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<!--<ol class="carousel-indicators">
			<li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#homeCarousel" data-slide-to="1"></li>
			<li data-target="#homeCarousel" data-slide-to="2"></li>
			<li data-target="#homeCarousel" data-slide-to="3"></li>
			<li data-target="#homeCarousel" data-slide-to="4"></li>
			<li data-target="#homeCarousel" data-slide-to="5"></li>
			<li data-target="#homeCarousel" data-slide-to="6"></li>
		</ol> -->

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="<?=base_url()?>/images/home.png" alt="" />
				<!-- <div class="carousel-caption">
					<h1 id="animateit" style="color:red;">hjj</h1>
					<p>iywgdhvbjvfyrdyfgjbh</p>
				</div> -->
			</div>

		</div>
		</div>

	<div class="global-bar">
			<div class="topBar">
				<div class="mobile-nav-toggle" style="display:none;">
					<a href="#">Menu</a>
				</div>
			</div>
	</div>

	<div class="container parent">
		<div class="row">
			<!-- Left Sidebar START -->
			<div class="col-xs-3 leftBar alpha omega" style=" ">
				<!--<h2 class="logo" style="background: url('<?=base_url()?>/images/favicon.ico') no-repeat;"><a href="">	</a></h2> -->
				<a href="<?=base_url()?>index.php">
					<img src="<?=base_url()?>/images/favicon-mod.png" class="logo img-responsive" id="cultlogo"/ style="width: 150px;">
				</a>

				<ul class="navigation">
					<li id="council_home" class="parent council-nav"><a href="<?php echo site_url('') ?>">Home</a></li>
					<li id="council_clubs" class="parent has-sub council-nav"><a style="cursor: pointer;">Clubs</a>
						<ul class="sub-menu col-xs-10	 alpha omega">
							<li id="music" class="council-nav"><a href="<?php echo site_url('welcome/music') ?>">Music</a></li>
							<li id="dance" class="council-nav"><a href="<?php echo site_url('welcome/dance') ?>">Dance</a></li>
							<li id="dramatics" class="council-nav"><a href="<?php echo site_url('welcome/dramatics') ?>">Dramatics</a></li>
							<li id="els" class="council-nav"><a href="<?php echo site_url('welcome/els') ?>">ELS</a></li>
							<li id="fac" class="council-nav"><a href="<?php echo site_url('welcome/fac') ?>">Fine Arts Club</a></li>
						</ul>
					</li>

					<li id="page_galaxy" class="parent council-nav"><a target="_blank" href="http://students.iitk.ac.in/cultcouncil/galaxy/">Galaxy</a></li>
					<li id="page_schedule" class="parent council-nav"><a href="<?php echo site_url('welcome/schedule') ?>">Schedule</a></li>
					<li id="page_team" class="parent council-nav"><a href="<?php echo site_url('welcome/team') ?>">Team</a></li>
					<li id="page_gallery" class="parent council-nav"><a href="<?php echo site_url('welcome/Gallery') ?>">Gallery</a></li>

				</ul>

			</div>
			<!-- Left Sidebar END -->
