<?php
define('DB_HOST', 'ten host');
define('DB_NAME', 'ten csdl');
define('DB_USER','user ket noi csdl');
define('DB_PASSWORD','pass ket noi csdl');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

// doan code nay la de giup hien thi font unicode ra man hinh
mysql_query ("set character_set_client='utf8'"); 
mysql_query ("set character_set_results='utf8'"); 
mysql_query ("set collation_connection='utf8_general_ci'"); 

?>