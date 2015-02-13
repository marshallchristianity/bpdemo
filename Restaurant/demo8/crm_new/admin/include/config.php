<?php
	$db_connect = mysqli_connect('localhost', 'bigperluser','bigperlpwd','bigperldb');
	if(!$db_connect){
	die("could not connect".mysql_error());
	}
	
	define('DB_PREFIX',"bp_");
	
?>