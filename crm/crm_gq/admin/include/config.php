<?php
$urisegment=$_SERVER['HTTP_HOST'];
if($urisegment == "localhost"){
$db_connect = mysqli_connect('localhost', 'root','','bigperlt_bpearl');
}else{
$db_connect = mysqli_connect('localhost', 'bigperluser','bigperl@123','bigperldb');
}
if (!$db_connect) {
    die('Not connected : ' . mysql_error());
}
?>