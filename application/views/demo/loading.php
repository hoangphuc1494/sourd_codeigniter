<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>LOADING</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<style type="text/css">
		.animationload {
			background-color: #fff;
			height: 100%;
			left: 0;
			position: fixed;
			top: 0;
			width: 100%;
			z-index: 10000;
		}
		.osahanloading {
			animation: 1.5s linear 0s normal none infinite running osahanloading;
			background: #fed37f none repeat scroll 0 0;
			border-radius: 50px;
			height: 50px;
			left: 50%;
			margin-left: -25px;
			margin-top: -25px;
			position: absolute;
			top: 50%;
			width: 50px;
		}

		.osahanloading::after {
			animation: 1.5s linear 0s normal none infinite running osahanloading_after;
			border-color: #85d6de transparent;
			border-radius: 80px;
			border-style: solid;
			border-width: 10px;
			content: "";
			height: 80px;
			left: -25px;
			position: absolute;
			top: -26px;
			width: 80px;
		}

		@keyframes osahanloading {
			0% {
				transform: rotate(0deg);
			}
			50% {
				background: #85d6de none repeat scroll 0 0;
				transform: rotate(180deg);
			}
			100% {
				transform: rotate(360deg);
			}
		}
	</style>
</head>
<body>
	<div id="loading" class="animationload">
		<div class="osahanloading"></div>
	</div>
	<div>
		Nguyễn Hoàng Phúc
	</div>
	<button onclick="myFunction()">Click me</button>
</body>
<script type="text/javascript">
	$(document).ready(function () {
		$('#loading').hide();
	});
	function myFunction() {
		$('#loading').show();
		setTimeout(function() {
			$('#loading').hide();
		},3000);		
	}
</script>
</html>
