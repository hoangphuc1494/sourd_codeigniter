<!DOCTYPE html>
<html>
<head>
<title>Tạo slideshow cho trang thiết kế nội thất bằng jQuery và CSS3</title>
	<!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
	<!-- <meta name="viewport" content="width=device-width,initial-scale=1" /> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assest/interior-dessign-jquery-image-slideshow-tutorial/demo.css'; ?>" media="all" />
    <!-- <link rel="icon" href="http://www.thuthuatweb.net/wp-content/themes/HostingSite/favicon.ico" type="image/x-ico"/> -->


</head>
<body>

<div class="main_gallery">	    
				<div id="gallery" class="content-gallery">
					<div class="slideshow-container">
						<div id="slideshow" class="slideshow"></div>
						<div id="caption" class="caption-container"></div>
					</div>
				</div> 		
               <!-- Navigation Thumbs  --> 	
			   <div id="thumbs" class="navigation">
				  <ul class="thumbs noscript">
					 <li>
						<a class="thumb" name="leaf" href="<?php echo base_url().'assest/interior-dessign-jquery-image-slideshow-tutorial/images/img_b1.jpg'; ?>" title="Agrocore">
						   <img src="<?php echo base_url().'assest/interior-dessign-jquery-image-slideshow-tutorial/images/img_1.jpg'; ?>" alt="Agrocore" />
						</a>
						<div class="caption">
						   <div class="indent1">living set </div>
						   <div class="image-desc">Cool looking but extremely functional and comfortable. The colours black and white dominate throughout. Nguyễn Hoàng Phúc<br />
							Sleek and stylish interior to suit your taste.</div>
						   <div class="indent"><h4>Contemporary</h4></div>
						</div>
					 </li>
					 <li>
						<a class="thumb" name="leaf" href="<?php echo base_url().'assest/interior-dessign-jquery-image-slideshow-tutorial/images/img_b2.jpg'; ?>" title="ProClinique">
						   <img src="<?php echo base_url().'assest/interior-dessign-jquery-image-slideshow-tutorial/images/img_2.jpg'; ?>" alt="ProClinique" />
						</a>
						<div class="caption">
						   <div class="indent1">in grey</div>
						   <div class="image-desc">Luxury living is being redefined and emphasis is being laid on comfortable living, without compromising on style, modest in the color codes</div>
						   <div class="indent"><h4>Sitting room </h4></div>
						</div>
					 </li>
					 <li>
						<a class="thumb" name="leaf" href="<?php echo base_url().'assest/interior-dessign-jquery-image-slideshow-tutorial/images/img_b3.jpg'; ?>" title="Beauty">
						   <img src="<?php echo base_url().'assest/interior-dessign-jquery-image-slideshow-tutorial/images/img_3.jpg'; ?>" alt="Beauty" />
						</a>
						<div class="caption">
						  <div class="indent1">living set </div>
						   <div class="image-desc">Cool looking but extremely functional and comfortable. The colours black and white dominate throughout.<br />
							Sleek and stylish interior to suit your taste.</div>
						   <div class="indent"><h4>Contemporary</h4></div>
						</div>
					 </li>
					 <li>
						<a class="thumb" name="leaf" href="<?php echo base_url().'assest/interior-dessign-jquery-image-slideshow-tutorial/images/img_b4.jpg'; ?>" title="Market">
						   <img src="<?php echo base_url().'assest/interior-dessign-jquery-image-slideshow-tutorial/images/img_4.jpg'; ?>" alt="Market" />
						</a>
						<div class="caption">
						   <div class="indent1">in grey  </div>
						   <div class="image-desc">Luxury living is being redefined and emphasis is being laid on comfortable living, without compromising on style, modest in the color codes</div>
						   <div class="indent"><h4>Sitting room </h4></div>
						</div>
					 </li>
					 <li class="last">
						<a class="thumb" name="leaf" href="<?php echo base_url().'assest/interior-dessign-jquery-image-slideshow-tutorial/images/img_b5.jpg'; ?>" title="Business">
						   <img src="<?php echo base_url().'assest/interior-dessign-jquery-image-slideshow-tutorial/images/img_5.jpg'; ?>" alt="Business" />
						</a>
						<div class="caption">
						   <div class="indent1">living set </div>
						   <div class="image-desc">Cool looking but extremely functional and comfortable. The colours black and white dominate throughout.<br />
							Sleek and stylish interior to suit your taste.</div>
						   <div class="indent"><h4>Contemporary</h4></div>
						</div>
					 </li>
				  </ul>
			   </div>
			   <!-- End Navigation Thumbs -->
		</div>
	  <!-- End Main -->
	
</div>

<!-- <div class="footer-bar">
    <span class="article-wrapper">
        <span class="article-label">Xem Bài Viết: </span>
        <span class="article-link"><a href="https://www.thuthuatweb.net/javacript/tao-slideshow-cho-trang-thiet-ke-noi-that-bang-jquery-va-css3.html">Tạo slideshow cho trang thiết kế nội thất bằng jQuery và CSS3</a></span>
    </span>
    
</div> -->
    
<!-- load that jquery library -->
   <!-- jQuery -->
    <script type="text/javascript" src="<?php echo base_url().'assest/interior-dessign-jquery-image-slideshow-tutorial/js/jquery-1.3.2.js'; ?>"></script>
    <!-- galleriffic -->
	<script type="text/javascript" src="<?php echo base_url().'assest/interior-dessign-jquery-image-slideshow-tutorial/js/jquery.galleriffic.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assest/interior-dessign-jquery-image-slideshow-tutorial/js/jquery.opacityrollover.js'; ?>"></script>
    <script type="text/javascript">
		jQuery(document).ready(function($) {
			/*$('div.content').css('display', 'block');*/
			$('div.content-gallery').css('display', 'block');

			var onMouseOutOpacity = 0.5;
			$('#thumbs ul.thumbs li').opacityrollover({
				mouseOutOpacity:   onMouseOutOpacity,
				mouseOverOpacity:  1.0,
				fadeSpeed:         'fast',
				exemptionSelector: '.selected'
			});
			
			var gallery = $('#thumbs').galleriffic({
			delay:                     6500,
			numThumbs:                 10,
			preloadAhead:              10,
			enableTopPager:            true,
			enableBottomPager:         true,
			maxPagesToShow:            7,
			imageContainerSel:         '#slideshow',
			controlsContainerSel:      '#controls',
			captionContainerSel:       '#caption',
			loadingContainerSel:       '#loading',
			renderSSControls:          true,
			renderNavControls:         true,
			playLinkText:              'Play Slideshow',
			pauseLinkText:             'Pause Slideshow',
			prevLinkText:              'previous',
			nextLinkText:              'next',
			nextPageLinkText:          'Next &rsaquo;',
			prevPageLinkText:          '&lsaquo; Prev',
			enableHistory:             false,
			autoStart:                 true,
			syncTransitions:           true,
			defaultTransitionDuration: 900,
			onSlideChange:             function(prevIndex, nextIndex) {
				this.find('ul.thumbs').children()
					.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
					.eq(nextIndex).fadeTo('fast', 1.0);
			},
			onPageTransitionOut:       function(callback) {
				this.fadeTo('fast', 0.0, callback);
			},
			onPageTransitionIn:        function() {
				this.fadeTo('fast', 1.0);
			}
			});
		});
	</script>
</body>
</html>
