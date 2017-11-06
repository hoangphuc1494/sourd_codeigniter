<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>The village</title>
	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css'>
	<link rel="stylesheet" href="<?php echo base_url().'assest/materialize-slider/css/style.css' ?>">
	<style type="text/css"></style>
</head>
<body>
	<div class="slider">
		<ul class="slides">
			<li>
				<img src="http://lorempixel.com/580/250/nature/1">
				<!-- <div class="caption center-align">
					<h3>This is our big Tagline!</h3>
					<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div> -->
			</li>
			<li>
				<img src="http://lorempixel.com/580/250/nature/2">
				<!-- <div class="caption left-align">
					<h3>Left Aligned Caption</h3>
					<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div> -->
			</li>
			<li>
				<img src="http://lorempixel.com/580/250/nature/3">
				<!-- <div class="caption right-align">
					<h3>Right Aligned Caption</h3>
					<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div> -->
			</li>
			<li>
				<img src="http://lorempixel.com/580/250/nature/4">
				<!-- <div class="caption center-align">
					<h3>This is our big Tagline!</h3>
					<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div> -->
			</li>
		</ul>
	</div>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js'></script>

	<script  src="<?php echo base_url().'assest/materialize-slider/js/index.js' ?>"></script>
</body>
</html>
