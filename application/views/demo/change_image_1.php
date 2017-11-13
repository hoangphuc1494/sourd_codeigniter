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

	<?php echo form_open_multipart('demo/do_upload');?>

	<input type="file" name="userfile" size="20" id="file_image" />
	<br /><br />

	<div class="croppdivstorelogo" id='croppdivstorelogo' style='display:none'>
		<div class="zoomIn-banner">
			<ul class="btn-zoom">
				<li><a href="javascript:;" onclick="shoplogoZoomOut()"><i class="fa fa-search-plus"></i> ZoomOut</a></li>
				<li><a href="javascript:;" onclick="shoplogoZoomIn()"><i class="fa fa-search-minus"></i> ZoomIn</a></li>
			</ul>
		</div>
		<img src="<?php echo base_url(); ?>images/image_banner/slide1.jpg" id='cropimagelogo'>
	</div>
	<br /><br />

	<input type="submit" value="upload" />

</form>
<script>
	$(document).ready(function() {
		$("#file_image").change(function(e) {
			var $image = $('.croppdivstorelogo > img'),
			replaced;
			if ($(this).val() == '') {
				$('#croppdivstorelogo').css('display','block');
				$('#croppdivstorelogo').html('');
				$('#croppdivstorelogo').html("<div class='zoomIn-banner'><ul class='btn-zoom'><li><a href='javascript:;' onclick='shoplogoZoomOut()'><i class='fa fa-search-plus'></i> ZoomOut</a></li><li><a href='javascript:;' onclick='shoplogoZoomIn()'><i class='fa fa-search-minus'></i> ZoomIn</a></li></ul></div><img src='' id='cropimagelogo'>");
			} else{
				$image.cropper({
					viewMode: 1,
					cropBoxResizable: false,
					dragCrop: false,
					aspectRatio: 1 / 1,
					preview: ".img-preview",
					crop: function(e) {
						$("#bannerdataX").val(Math.round(e.x));
						$("#bannerdataY").val(Math.round(e.y));
						$("#bannerdataHeight").val(Math.round(e.height));
						$("#bannerdataWidth").val(Math.round(e.width));
					},
					built: function () {
		      // Width and Height params are number types instead of string
		      $image.cropper("setCropBoxData", { width: 160, height: 160 });
		      $image.cropper("setDragMode", "move");
		  }
		});
			// $image.cropper();
			e.preventDefault();
			var formData = new FormData($(this).parents('form')[0]);
			$.ajax({
				beforeSend: function()
				{
					$("#loadedLogoImgshop").css("display", "block");
				},

				url: 'site/shop/ajax_check_shop_logo_size',
				type: 'POST',
				xhr: function() {
					var myXhr = $.ajaxSettings.xhr();
					return myXhr;
				},

				success: function (data) {
					$("#loadedLogoImgshop").css("display", "none");

					var arr = data.split('|');
					if(arr[0]=='Success'){
						$('#croppdivstorelogo').css('display','block');
						document.getElementById("cropimagelogo").src=arr[1];
						$image.cropper('replace', arr[1]);
						// $('#croppdivstorelogo').children('img')[1].remove();
						$('#ErrLogoImage').css('color','#090');
						$('#ErrLogoImage').html('Success');
						return true;
					} else {
						$('#file_image').val('');
						$('#croppdivstorelogo').css('display','none');
						$('#ErrLogoImage').css('color','#F00');
						$('#ErrLogoImage').html('Upload image failed. Please try again.');
						return false;
					}
				},


				data: formData,
				cache: false,
				contentType: false,
				processData: false
			});
		}
		return false;
	});
		function shoplogoZoomOut() {
    $('.croppdivstorelogo > img').cropper('zoom', 0.1);
  }

  function shoplogoZoomIn() {
    $('.croppdivstorelogo > img').cropper('zoom', -0.1);
  }
	});
</script>
</body>
</html>
