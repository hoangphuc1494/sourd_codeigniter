<!DOCTYPE html>
<html>
    <head><title>Mẫu form liên hệ độc nhất vô nhị bằng css3 transitions</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assest/unique-contact-form-css3/demo.css' ?>" media="all" />
    <!-- <link rel="icon" href="http://www.thuthuatweb.net/wp-content/themes/HostingSite/favicon.ico" type="image/x-ico"/> -->
</head>
<body>

<div id="wrap">
		<h1>Send a message</h1>
		<div id='form_wrap'>
			<form>
				<p>Hello Joe,</p>
				<label for="email">Your Message : </label>
				<textarea  name="message" value="Your Message" id="message" ></textarea>
				<p>Best,</p>	
				<label for="name">Name: </label>
				<input type="text" name="name" value="" id="name" />
				<label for="email">Email: </label>
				<input type="text" name="email" value="" id="email" />
				<input type="submit" name ="submit" value="Now, I send, thanks!" />
			</form>
		</div>
</div>
    
<!-- <div class="footer-bar">
    <span class="article-wrapper">
        <span class="article-label">Xem Bài Viết: </span>
        <span class="article-link"><a href="https://www.thuthuatweb.net/css/mau-form-lien-he-doc-nhat-vo-nhi-bang-css3-transitions.html">Mẫu form liên hệ độc nhất vô nhị bằng css3 transitions</a></span>
    </span>
    
</div> -->
    
    
<script  src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js"></script>
	<!--[if IE]><script>
	$(document).ready(function() { 

$("#form_wrap").addClass('hide');

})

</script><![endif]--> 

<!--[if IE]><script>
    $(document).ready(function() { 
            $("#form_wrap").addClass('hide');
            $("#form_wrap").prepend( '<div id="before"></div>').append( '<div id="after"</div>');
            $("#form_wrap").hover(function(){
             $(this).stop(true, false).animate({
                  height : '836px',
                  top : '-200px'
             }, 2000);  
            $('form').stop(true, false).animate({
        height : '580px'
        }, 2000, function(){
                         $('#form_wrap input[type=submit]').css({'z-index' : '1', 'opacity' : '1'})} ) }, function() {
        $('#form_wrap input[type=submit]').stop(true, true).css({ 'opacity' : '0'})
            $(this).stop(true, false).animate({
            height : '446px',
            top : '0px'
  
        }, 2000);   
        $('form').stop(true, false).animate({
                height : '200px'}, 2000)    
        })
})
</script><![endif]-->

</body>
</html>
