<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>The village</title>
	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css'>
	<link rel="stylesheet" href="../../assest/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assest/materialize-slider/css/style.css">
	<style type="text/css"></style>
</head>
<body>
	<div class="wrapper"> 
		<header>
			<div class="container">
				<div class="menu-top clearfix">
					<div class="col-md-4 col-sm-4">
						<div class="logo"><h3>THE VILLAGE</h3></div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="info-header-top">
							<span>Call us at</span>
							<b>+84 236 353 7979</b>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="login-menu-top">
							<a href="#">Member</a>
							<a href="#" class="login">Login</a>
						</div>
					</div>  
				</div>
			</div> 
			<div class="slider clearfix">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<img src="http://lorempixel.com/580/250/nature/1"> 
						</div>
						<div class="item">
							<img src="http://lorempixel.com/580/250/nature/2"> 
						</div>
						<div class="item">
							<img src="http://lorempixel.com/580/250/nature/3"> 
						</div>
						<div class="item">
							<img src="http://lorempixel.com/580/250/nature/4"> 
						</div> 
					</div>
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div> 
		</header> 
	</div>

	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js'></script>
	<script  src="../../assest/bootstrap/js/bootstrap.min.js"></script>
	<script  src="../../assest/materialize-slider/js/index.js"></script>
</body>
</html>
