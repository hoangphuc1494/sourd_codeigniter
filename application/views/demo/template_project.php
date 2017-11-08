<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>The template project</title>
	<link rel="stylesheet" href="<?php echo base_url()?>assest/bootstrap/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<!-- <div class="container"> -->
		<!-- 
		<div class="row">
			<div class="col-xs-4 lead">a</div>
			<div class="col-xs-4">b</div>
			<div class="col-xs-4">c</div></div>
		</div> -->
	<!-- <div class="container">
		<div class="col-sm-4">a</div>
		<div class="col-sm-4">b</div>
		<div class="col-sm-4">c</div>
	</div>
	<div class="container">
		<div class="col-md-4">a</div>
		<div class="col-md-4">b</div>
		<div class="col-md-4">c</div>
	</div>
	<div class="container">
		<div class="col-lg-4">a</div>
		<div class="col-lg-4">b</div>
		<div class="col-lg-4">c</div> -->
	<!-- </div> -->
	<div class="container-fluid">
	<div class="row" style="height: 70px;">
			<div class="col-xs-4" style="text-align: center; margin-top: 10px; font-size: 30px">THE VILLAGE</div>
			<div class="col-xs-4">b</div>
			<div class="col-xs-4">c</div>
		</div>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo base_url(); ?>images/image_banner/slide1.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="<?php echo base_url(); ?>images/image_banner/slide2.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="<?php echo base_url(); ?>images/image_banner/slide3.jpg" alt="New york" style="width:100%;">
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
	</div>
	<script src="<?php echo base_url()?>assest/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
