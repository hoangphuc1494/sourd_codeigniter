<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
	<title>Trình bày sản phẩm nhiều chi tiết với CSS3 và jQuery</title>
    <!-- <link rel="icon" href="http://www.thuthuatweb.net/wp-content/themes/HostingSite/favicon.ico" type="image/x-ico"/> -->
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
	<link href="<?php echo base_url().'assest/style.css' ?>" rel="stylesheet" />
</head>
<body>


<div class="wrapper">
        <section class="row">
            <div class="container-item">
                <div class="item">
                    <div class="item-overlay">
                        <a href="#" class="item-button info"><i class="fa fa-info"></i></a>
                        <a href="#" class="item-button share share-btn">
                            <i class="fa fa-share-alt"></i></a>
                        <div class="sale-tag"><span>SALE</span></div>
                    </div>
                    <!-- item image -->
                    <div class="item-img">
                        <img src="<?php echo base_url().'assest/images/shoe.jpg' ?>" width="260" height="260" />
                    </div>
                    <!-- end item image -->
                    <div class="item-content">
                        <div class="item-top-content">
                            <div class="item-top-content-inner">
                                <div class="item-product">

                                    <div class="item-top-title">
                                        <h2>Ipath lowrunner</h2>
                                        <p class="subdescription">
                                            Low skateshoes - Grey
                                        </p>
                                    </div>
                                </div>
                                <div class="item-product-price">
                                    <span class="price-num">$17</span>
                                    <p class="subdescription">$36</p>
                                    <div class="old-price"></div>
                                </div>
                            </div>  
                        </div>
                        <div class="item-add-content">
                            <div class="item-add-content-inner">
                                <div class="section">
                                    <h4>Sizes</h4>
                                    <p>40,41,42,43,44,45</p>
                                </div> 
                                <div class="section">
                                    <a href="#" class="btn buy expand">Buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Social icons -->
                <div class="item-menu popout-menu">
                    <ul>
                        <li><a href="#" class="popout-menu-item"> <i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="popout-menu-item"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="popout-menu-item"> <i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="popout-menu-item"> <i class="fa fa-tumblr"></i></a></li>
                        <li><a href="#" class="popout-menu-item"> <i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                <!-- end social icons -->
            </div>

            <div class="container-item">
                <div class="item">
                    <div class="item-overlay">
                        <a href="#" class="item-button info"><i class="fa fa-info"></i></a>
                        <a href="#" class="item-button share share-btn">
                            <i class="fa fa-share-alt"></i></a>
                        
                    </div>
                    <!-- item image -->
                    <div class="item-img">
                        <img src="<?php echo base_url().'assest/images/adidas.jpg' ?>" width="260" height="260" />
                    </div>

                    <div class="item-content">
                        <div class="item-top-content">
                            <div class="item-top-content-inner">
                                <div class="item-product">

                                    <div class="item-top-title">
                                        <h2>Adidas for men</h2>
                                        <p class="subdescription">
                                            TUBULAR RADIAL SHOES
                                        </p>
                                    </div>
                                </div>
                                <div class="item-product-price">
                                    <span class="price-num">$97</span>
                                
                                </div>
                            </div>  
                        </div>
                        <div class="item-add-content">
                            <div class="item-add-content-inner">
                                <div class="section">
                                    <h4>Sizes</h4>
                                    <p>40,41,42,43,44,45</p>
                                </div> 
                                <div class="section">
                                    <a href="#" class="btn buy expand">Buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-menu popout-menu">
                    <ul>
                        <li><a href="#" class="popout-menu-item"> <i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="popout-menu-item"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="popout-menu-item"> <i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="popout-menu-item"> <i class="fa fa-tumblr"></i></a></li>
                        <li><a href="#" class="popout-menu-item"> <i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>


             <div class="container-item">
                <div class="item">
                    <div class="item-overlay">
                        <a href="#" class="item-button info"><i class="fa fa-info"></i></a>
                        <a href="#" class="item-button share share-btn">
                            <i class="fa fa-share-alt"></i></a>
                        
                    </div>
                    <!-- item image -->
                    <div class="item-img">
                        <img src="<?php echo base_url().'assest/images/adidas_2.jpg' ?>" width="260" height="260" />
                    </div>

                    <div class="item-content">
                        <div class="item-top-content">
                            <div class="item-top-content-inner">
                                <div class="item-product">

                                    <div class="item-top-title">
                                        <h2>Adidas for women</h2>
                                        <p class="subdescription">
                                            Haze Coral
                                        </p>
                                    </div>
                                </div>
                                <div class="item-product-price">
                                    <span class="price-num">$99</span>
                                
                                </div>
                            </div>  
                        </div>
                        <div class="item-add-content">
                            <div class="item-add-content-inner">
                                <div class="section">
                                    <h4>Sizes</h4>
                                    <p>40,41,42,43,44,45</p>
                                </div> 
                                <div class="section">
                                    <a href="#" class="btn buy expand">Buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-menu popout-menu">
                    <ul>
                        <li><a href="#" class="popout-menu-item"> <i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="popout-menu-item"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="popout-menu-item"> <i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="popout-menu-item"> <i class="fa fa-tumblr"></i></a></li>
                        <li><a href="#" class="popout-menu-item"> <i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>


             <div class="container-item">
                <div class="item">
                    <div class="item-overlay">
                        <a href="#" class="item-button info"><i class="fa fa-info"></i></a>
                        <a href="#" class="item-button share share-btn">
                            <i class="fa fa-share-alt"></i></a>
                        
                    </div>
                    <!-- item image -->
                    <div class="item-img">
                        <img src="<?php echo base_url().'assest/images/nike.jpg' ?>" width="260" height="260" />
                    </div>

                    <div class="item-content">
                        <div class="item-top-content">
                            <div class="item-top-content-inner">
                                <div class="item-product">

                                    <div class="item-top-title">
                                        <h2>Neon nike shoes</h2>
                                        <p class="subdescription">
                                             Workout shoes and Yellow gym 
                                        </p>
                                    </div>
                                </div>
                                <div class="item-product-price">
                                    <span class="price-num">$175</span>
                                    
                                </div>
                            </div>  
                        </div>
                        <div class="item-add-content">
                            <div class="item-add-content-inner">
                                <div class="section">
                                    <h4>Sizes</h4>
                                    <p>40,41,42,43,44,45</p>
                                </div> 
                                <div class="section">
                                    <a href="#" class="btn buy expand">Buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-menu popout-menu">
                    <ul>
                        <li><a href="#" class="popout-menu-item"> <i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="popout-menu-item"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="popout-menu-item"> <i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="popout-menu-item"> <i class="fa fa-tumblr"></i></a></li>
                        <li><a href="#" class="popout-menu-item"> <i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>


             <div class="container-item">
                <div class="item">
                    <div class="item-overlay">
                        <a href="#" class="item-button info"><i class="fa fa-info"></i></a>
                        <a href="#" class="item-button share share-btn">
                            <i class="fa fa-share-alt"></i></a>
                             <div class="sale-tag"><span>SALE</span></div>
                    </div>
                    <!-- item image -->
                    <div class="item-img">
                        <img src="<?php echo base_url().'assest/images/converse.jpg' ?>" width="260" height="260" />
                    </div>

                    <div class="item-content">
                        <div class="item-top-content">
                            <div class="item-top-content-inner">
                                <div class="item-product">

                                    <div class="item-top-title">
                                        <h2>Converse CTAS</h2>
                                        <p class="subdescription">
                                            White & Multi-Colored Shoes
                                        </p>
                                    </div>
                                </div>
                                <div class="item-product-price">
                                    <span class="price-num">$64</span>
                                    <p class="subdescription">$96</p>
                                    <div class="old-price"></div>
                                </div>
                            </div>  
                        </div>
                        <div class="item-add-content">
                            <div class="item-add-content-inner">
                                
                                <div class="section">
                                    <a href="#" class="btn buy expand">Buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-menu popout-menu">
                    <ul>
                        <li><a href="#" class="popout-menu-item"> <i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="popout-menu-item"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="popout-menu-item"> <i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="popout-menu-item"> <i class="fa fa-tumblr"></i></a></li>
                        <li><a href="#" class="popout-menu-item"> <i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>

        <div class="container-item">
                <div class="item">
                    <div class="item-overlay">
                        <a href="#" class="item-button info"><i class="fa fa-info"></i></a>
                        <a href="#" class="item-button share share-btn">
                            <i class="fa fa-share-alt"></i></a>
                        <div class="sale-tag"><span>SALE</span></div>
                    </div>
                    <!-- item image -->
                    <div class="item-img">
                        <img src="<?php echo base_url().'assest/images/puma.jpg' ?>" width="260" height="260" />
                    </div>

                    <div class="item-content">
                        <div class="item-top-content">
                            <div class="item-top-content-inner">
                                <div class="item-product">

                                    <div class="item-top-title">
                                        <h2>Puma Sneakers for Men</h2>
                                        <p class="subdescription">
                                             6 FM Men's Running Shoes
                                        </p>
                                    </div>
                                </div>
                                <div class="item-product-price">
                                    <span class="price-num">$117</span>
                                    <p class="subdescription">$136</p>
                                    <div class="old-price"></div>
                                </div>
                            </div>  
                        </div>
                        <div class="item-add-content">
                            <div class="item-add-content-inner">
                                <div class="section">
                                    <a href="#" class="btn buy expand">Buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-menu popout-menu">
                    <ul>
                        <li><a href="#" class="popout-menu-item"> <i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="popout-menu-item"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="popout-menu-item"> <i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="popout-menu-item"> <i class="fa fa-tumblr"></i></a></li>
                        <li><a href="#" class="popout-menu-item"> <i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>


        </section>
    </div>


<!-- <div class="footer-bar">
    <span class="article-wrapper">
        <span class="article-label">Xem Bài Viết: </span>
        <span class="article-link"><a href="https://www.thuthuatweb.net/css/trinh-bay-san-pham-nhieu-chi-tiet-voi-css3-va-jquery.html">Trình bày sản phẩm nhiều chi tiết với CSS3 và jQuery</a></span>
    </span>
    
</div> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    
<script type="text/javascript">
   $(document).ready(function() {

        $(".share-btn").mouseenter(function() {

            // find the closest class .item-menu
            
            $(this).closest("div.container-item").find(".item-menu").addClass("visible")
        });
        $(".share-btn").mouseleave(function() {
            setTimeout(function() {
            $(".item-menu").removeClass("visible")
            }, 500);
        });

        

        $(".container-item").hover(function() {
            setTimeout(function() {
            $(".container-item").css("z-index","1000")
            }, 500);
        });


});

</script>   
 
</body>
</html>