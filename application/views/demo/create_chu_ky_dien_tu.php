<!DOCTYPE html>
<html>
<head>
	<title>Tạo ứng dụng kí tên điện tử với jQuery Mobile và HTML5 Canvas</title>
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1">  -->
	<!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
    <!-- <link rel="icon" href="http://www.thuthuatweb.net/wp-content/themes/HostingSite/favicon.ico" type="image/x-ico"/> -->
	<link rel="stylesheet" href="<?php echo base_url().'assest/signature-pad/jquery.mobile-1.3.2.min.css'; ?>" />
     <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assest/signature-pad/jquery.mobile-1.3.2.min.css'; ?>demo.css" media="all" />
	<script src="<?php echo base_url().'assest/signature-pad/jquery-1.9.1.min.js'; ?>"></script>
	<script src="<?php echo base_url().'assest/signature-pad/jquery.mobile-1.3.2.min.js'; ?>"></script>
	<style type="text/css">
		#div_signcontract{ width: 99%; }
		.popupHeader{ margin: 10px; }
	</style>
	<script type="text/javascript">
		var isSign = false;
		var leftMButtonDown = false;
		
		jQuery(function(){
			//Initialize sign pad
			init_Sign_Canvas();
		});
		
		function fun_submit() {
			if(isSign) {
				var canvas = $("#canvas").get(0);
				var imgData = canvas.toDataURL();
				jQuery('#page').find('p').remove();
				jQuery('#page').find('img').remove();
				jQuery('#page').append(jQuery('<p>Your Sign:</p>'));
				jQuery('#page').append($('<img/>').attr('src',imgData));
				
				closePopUp();
			} else {
				alert('Please sign');
			}
		}
		
		function closePopUp() {
			jQuery('#divPopUpSignContract').popup('close');
			jQuery('#divPopUpSignContract').popup('close');
		}
		
		function init_Sign_Canvas() {
			isSign = false;
			leftMButtonDown = false;
			
			//Set Canvas width
			var sizedWindowWidth = $(window).width();
			if(sizedWindowWidth > 700)
				sizedWindowWidth = $(window).width() / 2;
			else if(sizedWindowWidth > 400)
				sizedWindowWidth = sizedWindowWidth - 100;
			else
				sizedWindowWidth = sizedWindowWidth - 50;
			 
			 $("#canvas").width(sizedWindowWidth);
			 $("#canvas").height(200);
			 $("#canvas").css("border","1px solid #000");
			
			 var canvas = $("#canvas").get(0);
			
			 canvasContext = canvas.getContext('2d');

			 if(canvasContext)
			 {
				 canvasContext.canvas.width  = sizedWindowWidth;
				 canvasContext.canvas.height = 200;

				 canvasContext.fillStyle = "#fff";
				 canvasContext.fillRect(0,0,sizedWindowWidth,200);
				 
				 canvasContext.moveTo(50,150);
				 canvasContext.lineTo(sizedWindowWidth-50,150);
				 canvasContext.stroke();
				
				 canvasContext.fillStyle = "#000";
				 canvasContext.font="20px Arial";
				 canvasContext.fillText("x",40,155);
			 }
			 // Bind Mouse events
			 $(canvas).on('mousedown', function (e) {
				 if(e.which === 1) { 
					 leftMButtonDown = true;
					 canvasContext.fillStyle = "#000";
					 var x = e.pageX - $(e.target).offset().left;
					 var y = e.pageY - $(e.target).offset().top;
					 canvasContext.moveTo(x, y);
				 }
				 e.preventDefault();
				 return false;
			 });
			
			 $(canvas).on('mouseup', function (e) {
				 if(leftMButtonDown && e.which === 1) {
					 leftMButtonDown = false;
					 isSign = true;
				 }
				 e.preventDefault();
				 return false;
			 });
			
			 // draw a line from the last point to this one
			 $(canvas).on('mousemove', function (e) {
				 if(leftMButtonDown == true) {
					 canvasContext.fillStyle = "#000";
					 var x = e.pageX - $(e.target).offset().left;
					 var y = e.pageY - $(e.target).offset().top;
					 canvasContext.lineTo(x,y);
					 canvasContext.stroke();
				 }
				 e.preventDefault();
				 return false;
			 });
			 
			 //bind touch events
			 $(canvas).on('touchstart', function (e) {
				leftMButtonDown = true;
				canvasContext.fillStyle = "#000";
				var t = e.originalEvent.touches[0];
				var x = t.pageX - $(e.target).offset().left;
				var y = t.pageY - $(e.target).offset().top;
				canvasContext.moveTo(x, y);
				
				e.preventDefault();
				return false;
			 });
			 
			 $(canvas).on('touchmove', function (e) {
				canvasContext.fillStyle = "#000";
				var t = e.originalEvent.touches[0];
				var x = t.pageX - $(e.target).offset().left;
				var y = t.pageY - $(e.target).offset().top;
				canvasContext.lineTo(x,y);
				canvasContext.stroke();
				
				e.preventDefault();
				return false;
			 });
			 
			 $(canvas).on('touchend', function (e) {
				if(leftMButtonDown) {
					leftMButtonDown = false;
					isSign = true;
				}
			 
			 });
		}
	</script>
</head>
<body>
	<div data-role="page">
		<div data-role="header">
			<h1>Tạo ứng dụng kí tên điện tử với jQuery Mobile và HTML5 Canvas</h1>
		</div><!-- /header -->
		<div id="page" data-role="content">
			<a href="#divPopUpSignContract" data-rel="popup" data-position-to="window" data-role="button" data-inline="true">Open Sign Pad</a>
		</div>	
		<div data-role="popup" id="divPopUpSignContract">
			<div data-role="header" data-theme="b">
				<a data-role="button" data-rel="back" data-transition="slide" class="ui-btn-right" onclick="closePopUp()"> Close </a>
				<p class="popupHeader">Sign Pad</p>
			</div>
			<div class="ui-content popUpHeight">
				<div id="div_signcontract">
					<canvas id="canvas">Canvas is not supported</canvas>
					<div>
						<input id="btnSubmitSign" type="button" data-inline="true" data-mini="true" data-theme="b" value="Submit Sign" onclick="fun_submit()" />
						<input id="btnClearSign" type="button" data-inline="true" data-mini="true" data-theme="b" value="Clear" onclick="init_Sign_Canvas()" />
					</div>
				</div>	
			</div>
		</div>
	</div>
    
<!-- <div class="footer-bar">
    <span class="article-wrapper">
        <span class="article-label">Xem Bài Viết: </span>
        <span class="article-link"><a href="https://www.thuthuatweb.net/javacript/tao-ung-dung-ki-ten-dien-tu-voi-jquery-mobile-va-html5-canvas.html">Tạo ứng dụng kí tên điện tử với jQuery Mobile và HTML5 Canvas</a></span>
    </span>
    
</div> --> 
</body>
</html>	

