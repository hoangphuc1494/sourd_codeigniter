<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>slide shows image</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<style type="text/css">
		#slider-text{
			padding-top: 40px;
			display: block;
		}
		#slider-text .col-md-6{
			overflow: hidden;
		}

		#slider-text h2 {
			font-family: 'Josefin Sans', sans-serif;
			font-weight: 400;
			font-size: 30px;
			letter-spacing: 3px;
			margin: 30px auto;
			padding-left: 40px;
		}
		#slider-text h2::after{
			border-top: 2px solid #c7c7c7;
			content: "";
			position: absolute;
			bottom: 35px;
			width: 100%;
		}

		#itemslider h4{
			font-family: 'Josefin Sans', sans-serif;
			font-weight: 400;
			font-size: 12px;
			margin: 10px auto 3px;
		}
		#itemslider h5{
			font-family: 'Josefin Sans', sans-serif;
			font-weight: bold;
			font-size: 12px;
			margin: 3px auto 2px;
		}
		#itemslider h6{
			font-family: 'Josefin Sans', sans-serif;
			font-weight: 300;;
			font-size: 10px;
			margin: 2px auto 5px;
		}
		.badge {
			background: #b20c0c;
			position: absolute;
			height: 40px;
			width: 40px;
			border-radius: 50%;
			line-height: 31px;
			font-family: 'Josefin Sans', sans-serif;
			font-weight: 300;
			font-size: 14px;
			border: 2px solid #FFF;
			box-shadow: 0 0 0 1px #b20c0c;
			top: 5px;
			right: 25%;
		}
		#slider-control img{
			padding-top: 60%;
			margin: 0 auto;
		}
		@media screen and (max-width: 992px){
			#slider-control img {
				padding-top: 70px;
				margin: 0 auto;
			}
		}

		.carousel-showmanymoveone .carousel-control {
			width: 4%;
			background-image: none;
		}
		.carousel-showmanymoveone .carousel-control.left {
			margin-left: 5px;
		}
		.carousel-showmanymoveone .carousel-control.right {
			margin-right: 5px;
		}
		.carousel-showmanymoveone .cloneditem-1,
		.carousel-showmanymoveone .cloneditem-2,
		.carousel-showmanymoveone .cloneditem-3,
		.carousel-showmanymoveone .cloneditem-4,
		.carousel-showmanymoveone .cloneditem-5 {
			display: none;
		}
		@media all and (min-width: 768px) {
			.carousel-showmanymoveone .carousel-inner > .active.left,
			.carousel-showmanymoveone .carousel-inner > .prev {
				left: -50%;
			}
			.carousel-showmanymoveone .carousel-inner > .active.right,
			.carousel-showmanymoveone .carousel-inner > .next {
				left: 50%;
			}
			.carousel-showmanymoveone .carousel-inner > .left,
			.carousel-showmanymoveone .carousel-inner > .prev.right,
			.carousel-showmanymoveone .carousel-inner > .active {
				left: 0;
			}
			.carousel-showmanymoveone .carousel-inner .cloneditem-1 {
				display: block;
			}
		}
		@media all and (min-width: 768px) and (transform-3d), all and (min-width: 768px) and (-webkit-transform-3d) {
			.carousel-showmanymoveone .carousel-inner > .item.active.right,
			.carousel-showmanymoveone .carousel-inner > .item.next {
				-webkit-transform: translate3d(50%, 0, 0);
				transform: translate3d(50%, 0, 0);
				left: 0;
			}
			.carousel-showmanymoveone .carousel-inner > .item.active.left,
			.carousel-showmanymoveone .carousel-inner > .item.prev {
				-webkit-transform: translate3d(-50%, 0, 0);
				transform: translate3d(-50%, 0, 0);
				left: 0;
			}
			.carousel-showmanymoveone .carousel-inner > .item.left,
			.carousel-showmanymoveone .carousel-inner > .item.prev.right,
			.carousel-showmanymoveone .carousel-inner > .item.active {
				-webkit-transform: translate3d(0, 0, 0);
				transform: translate3d(0, 0, 0);
				left: 0;
			}
		}
		@media all and (min-width: 992px) {
			.carousel-showmanymoveone .carousel-inner > .active.left,
			.carousel-showmanymoveone .carousel-inner > .prev {
				left: -16.666%;
			}
			.carousel-showmanymoveone .carousel-inner > .active.right,
			.carousel-showmanymoveone .carousel-inner > .next {
				left: 16.666%;
			}
			.carousel-showmanymoveone .carousel-inner > .left,
			.carousel-showmanymoveone .carousel-inner > .prev.right,
			.carousel-showmanymoveone .carousel-inner > .active {
				left: 0;
			}
			.carousel-showmanymoveone .carousel-inner .cloneditem-2,
			.carousel-showmanymoveone .carousel-inner .cloneditem-3,
			.carousel-showmanymoveone .carousel-inner .cloneditem-4,
			.carousel-showmanymoveone .carousel-inner .cloneditem-5,
			.carousel-showmanymoveone .carousel-inner .cloneditem-6  {
				display: block;
			}
		}
		@media all and (min-width: 992px) and (transform-3d), all and (min-width: 992px) and (-webkit-transform-3d) {
			.carousel-showmanymoveone .carousel-inner > .item.active.right,
			.carousel-showmanymoveone .carousel-inner > .item.next {
				-webkit-transform: translate3d(16.666%, 0, 0);
				transform: translate3d(16.666%, 0, 0);
				left: 0;
			}
			.carousel-showmanymoveone .carousel-inner > .item.active.left,
			.carousel-showmanymoveone .carousel-inner > .item.prev {
				-webkit-transform: translate3d(-16.666%, 0, 0);
				transform: translate3d(-16.666%, 0, 0);
				left: 0;
			}
			.carousel-showmanymoveone .carousel-inner > .item.left,
			.carousel-showmanymoveone .carousel-inner > .item.prev.right,
			.carousel-showmanymoveone .carousel-inner > .item.active {
				-webkit-transform: translate3d(0, 0, 0);
				transform: translate3d(0, 0, 0);
				left: 0;
			}
		}
	</style>
</head>
<body>
	<!-- Item slider-->
<div class="container-fluid">
 
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="carousel carousel-showmanymoveone slide" id="itemslider">
        <div class="carousel-inner">
 
          <div class="item active">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="<?php echo base_url().'images/item-1.png' ?>" class="img-responsive center-block"></a>
              <h4 class="text-center">MAYORAL SUKNJA</h4>
              <h5 class="text-center">400.000 VND</h5>
            </div>
          </div>
 
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="<?php echo base_url().'images/item-2.png' ?>" class="img-responsive center-block"></a>
              <h4 class="text-center">MAYORAL KOŠULJA</h4>
              <h5 class="text-center">400.000 VND</h5>
            </div>
          </div>
 
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="<?php echo base_url().'images/item-3.png' ?>" class="img-responsive center-block"></a>
              <span class="badge">10%</span>
              <h4 class="text-center">PANTALONE TERI 2</h4>
              <h5 class="text-center">400.000 VND</h5>
              <h6 class="text-center">500.000 VND</h6>
            </div>
          </div>
 
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="<?php echo base_url().'images/item-4.png' ?>" class="img-responsive center-block"></a>
              <h4 class="text-center">CVETNA HALJINA</h4>
              <h5 class="text-center">600.000 VND</h5>
            </div>
          </div>
 
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="<?php echo base_url().'images/item-5.png' ?>" class="img-responsive center-block"></a>
              <h4 class="text-center">MAJICA FOTO</h4>
              <h5 class="text-center">400.000 VND</h5>
            </div>
          </div>
 
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="<?php echo base_url().'images/item-1.png' ?>" class="img-responsive center-block"></a>
              <h4 class="text-center">MAJICA MAYORAL</h4>
              <h5 class="text-center">400.000 VND</h5>
            </div>
          </div>
 
        </div>
<!-- left,right control -->
        <div id="slider-control">
        <a class="left carousel-control" href="#itemslider" data-slide="prev"><img src="<?php echo base_url().'images/arrow_left.png' ?>" alt="Left" class="img-responsive"></a>
        <a class="right carousel-control" href="#itemslider" data-slide="next"><img src="<?php echo base_url().'images/arrow_right.png' ?>" alt="Right" class="img-responsive"></a>
      </div>
      </div>
    </div>
  </div>
</div>
<!-- Item slider end-->
</body>
<script type="text/javascript">
	$(document).ready(function(){

		$('#itemslider').carousel({ interval: 3000 });

		$('.carousel-showmanymoveone .item').each(function(){
			var itemToClone = $(this);

			for (var i=1;i<6;i++) {
				itemToClone = itemToClone.next();

				if (!itemToClone.length) {
					itemToClone = $(this).siblings(':first');
				}

				itemToClone.children(':first-child').clone()
				.addClass("cloneditem-"+(i))
				.appendTo($(this));
			}
		});
	});

</script>
</html>
