<?php
require_once("db.php"); 
if(isset($_POST['delete'])) {
	$table = $_GET['table'];
	$id_array = $_POST['data']; // return array
	$id_count = count($_POST['data']); // count array
	
	for($i=0; $i < $id_count; $i++) {
		$id = $id_array[$i];
		$query = mysqli_query($link, "DELETE FROM `$table` WHERE `id` = '$id'");
		if(!$query) { die(mysqli_error()); }
	}
	if($table == "shinedata"){
	header("Location: shine.php?id=2"); 
	}else{
	header("Location: student.php?id=2"); // redirent after deleting
	}
}
if(isset($_POST['sendemail'])){ 
if($_POST['select'] == "selected"){
$_POST['table'] = $_GET['table'];
$_POST['data'] = implode(',',$_POST['data']);
include("mail.php");
}
if($_POST['select'] == "range"){
$sval = $_POST['data'][0];
$from = $_POST['from'];
$to = $_POST['to'];
if($from > 1){
$from = $sval + (($from-1) * 10);
}else{
$from = $sval;
}

if($to > 1){
$to = $from  + (($_POST['to']-$_POST['from']) * 10);
}
$_POST['table'] = $_GET['table'];
$_POST['data'] = '';
$_POST['from'] = $from;
$_POST['to'] = $to;
include("mail.php");
}
}
?>