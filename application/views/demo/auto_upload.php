<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Auto upload</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<style type="text/css"></style>
</head>
<body>
<?php if ($notification != '') { ?>
	<div class="col-xs-12 col-sm-12 col-md-12" id="notification"><?php echo $notification; ?></div>
	<?php } ?>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<img src="<?php echo base_url().'images/item-1.png' ?>">
		<?php foreach ($shows_image as $shows_image_list) { ?>
		<img src="<?php echo base_url().'uploads/'.$shows_image_list['image'] ?>">
		<?php } ?>
	</div>
	<div>
		<button id="button_upload">Upload Image</button>
	</div>
	<?php echo form_open_multipart('demo/auto_upload_image');?>
		<input type="file" name="file_image" id="file_image" onchange="javascript:this.form.submit();" style="display: none;">
	</form>

	<script>
		$(document).ready(function () {
			setTimeout(function() {
				$('#notification').hide();
			},5000);
		});
		$("#button_upload").click(function() {
			$("#file_image").click();
		});	
	</script>

</body>
</html>
