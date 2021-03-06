<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>hiệu ứng quảng cáo</title>

	<style type="text/css">
		a {
			display: block;
			margin: auto;
			margin-top: 50px;
			text-decoration: none;
			color: inherit;
		}
		
		@keyframes linear {
			
			from {
				background-position: 0 0;
			}
			to {
				background-position: 200px 0;
			}
			
		}
		
		@keyframes radial {
			
			from {
				background-position: 0 0;
			}
			to {
				background-position: 0 60px;
			}
			
		}
		
		@keyframes repeating {
			
			from {
				background-position: 0 0;
			}
			to {
				background-position: 0 85px;
			}
			
		}
		
		@keyframes electronic {
			
			0%, 100% {
				background-position: 20px -30px;
			}
			25% {
				background-position: 150px 5px;
			}
			50% {
				background-position: 20px 40px;
			}
			75% {
				background-position: -100px 5px;
			}
			
		}
		
		.biliboard {
			width: 200px;
			padding: 20px;
			text-align: center;
			position: relative;
			background: #fff;
			color: #333;
			font: 13px open, tahoma;
		}
		.biliboard:before {
			content: '';
			display: block;
			height: 100%;
			width: 100%;
			border-radius: 3px;
			transform: scale( 1.02, 1.08 );
			position: absolute;
			background: #f00;
			background: linear-gradient( 90deg, #fafafa, #fafafa, #1D8EF7, #fafafa, #fafafa );
			background-position: 55px 0;
			top: 0;
			animation: linear 1s infinite linear;
			left: 0;
			z-index: -1;
		}
		
		.biliboard.radial:before {
			background: radial-gradient( #fafafa, #fafafa, #F2A61A, #fafafa, #fafafa );
			animation: radial 1s infinite linear;
		}
		
		.biliboard.repeating:before {
			background: repeating-linear-gradient( -45deg, #fafafa, #fafafa 30px, #5FC914 30px, #5FC914 60px ) fixed;
			animation: repeating 1s infinite linear;
		}
		
		.biliboard.electronic:before {
			background: radial-gradient( #EA238D, #EA238D, #EA238D, #EA238D, #fafafa, #fafafa ) no-repeat;
			background-size: 150px 50px;
			animation: electronic 2s infinite linear;
		}
	</style>
</head>
<body>
	<a href="#" class="biliboard electronic">Get your free ebook</a>
	<a href="#" class="biliboard repeating">30% Off</a>
	<a href="#" class="biliboard">Click NOW!</a>
	<a href="#" class="biliboard radial">14-days Free trial</a>
</body>
</html>
