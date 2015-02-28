<?php
$urisegment=$_SERVER['HTTP_HOST'];
if($urisegment == "localhost"){
$link = mysqli_connect('localhost', 'root','','bigperlt_bpearl');
}else{
$link = mysqli_connect('localhost', 'bigperluser','bigperl@123','bigperldb');
}
if (!$link) {
    die('Not connected : ' . mysql_error());
}
?>