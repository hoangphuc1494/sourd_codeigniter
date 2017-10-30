<!DOCTYPE html>
<html>
    <head><title>Tạo chức năng Editable với jQuery và PureCSS</title>
	<!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
	<!-- <meta name="viewport" content="width=device-width,initial-scale=1" /> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assest/edittable-purecss/demo.css'; ?>" media="all" />
    <link rel="stylesheet" href="<?php echo base_url().'assest/edittable-purecss/pure-min.css'; ?>">
  
    <!-- <link rel="icon" href="http://www.thuthuatweb.net/wp-content/themes/HostingSite/favicon.ico" type="image/x-ico"/> -->
</head>
<body>
   

<h1>Editable table example</h1>
<table id="editable" class="pure-table pure-table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Make</th>
            <th>Model</th>
            <th>Year</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>1</td>
            <td>Honda</td>
            <td>Accord</td>
            <td>2009</td>
        </tr>

        <tr>
            <td>2</td>
            <td>Toyota</td>
            <td>Camry</td>
            <td>2012</td>
        </tr>

        <tr>
            <td>3</td>
            <td>Hyundai</td>
            <td>Elantra</td>
            <td class="uneditable">2010</td>
        </tr>
    </tbody>
</table>
    
<!-- <div class="footer-bar">
    <span class="article-wrapper">
        <span class="article-label">Xem Bài Viết: </span>
        <span class="article-link"><a href="https://www.thuthuatweb.net/javacript/tao-chuc-nang-editable-voi-jquery-va-purecss.html">Tạo chức năng Editable với jQuery và PureCSS</a></span>
    </span>
    
</div> -->

<script src="<?php echo base_url().'assest/edittable-purecss/jquery.min.js'; ?>"></script> 
<script src="<?php echo base_url().'assest/edittable-purecss/mindmup-editabletable.js'; ?>"></script>
<script>
	$('#editable').editableTableWidget();
	$('#editable td.uneditable').on('change', function(evt, newValue) {
		return false;
	});

$('#editable td').on('change', function(evt, newValue) {
	$.post( "script.php", { value: newValue })
		.done(function( data ) {
    			alert( "Data Loaded: " + data );
		});	
	;
});
    </script>
    
</body>
</html>
