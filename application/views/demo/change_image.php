<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Upload image</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<style type="text/css"></style>
</head>
<body>
<img src="<?php echo base_url(); ?>images/image_banner/slide1.jpg" id='cropimagelogo'>
<script>
	$(window).bind("load", function() {
    // IMAGE RESIZE
    $('img').each(function() {
        var maxWidth = 120;
        var maxHeight = 120;
        var ratio = 0;
        var width = $(this).width();
        var height = $(this).height();
     
        if(width > maxWidth){
            ratio = maxWidth / width;
            $(this).css("width", maxWidth);
            $(this).css("height", height * ratio);
            height = height * ratio;
        }
        var width = $(this).width();
        var height = $(this).height();
        if(height > maxHeight){
            ratio = maxHeight / height;
            $(this).css("height", maxHeight);
            $(this).css("width", width * ratio);
            width = width * ratio;
        }
    });
});
</script>
</body>
</html>
