<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Upload image</title>

	<style type="text/css"></style>
</head>
<body>
	<?php echo $error;?>

<?php echo form_open_multipart('demo/do_upload');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>
</body>
</html>
