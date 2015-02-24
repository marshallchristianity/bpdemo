<?php
//Make database called "practice"
//create table called "student_info";
//rows   ID,NAME,EMAIl,DOB
include "db.php";
//print_r($_POST['check_list']);
$id_str="";
foreach($_POST['check_list'] as $id)
{
	$id_str .=$id.",";
}
 $id_str .="''";
//retrieve data from database
 $sql="select * from autocomplete where id in($id_str)";
 $result=mysql_query($sql);
 while($row=mysql_fetch_array($result))
 {
	echo $row['email'];
	
	//put mail code here and send on this email id
	
	$from =$_POST["from"]; // sender
    $subject =$_POST["subject"];
    echo  $message = $_POST["ss"];
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 170);
    // send mail
    mail($row['email'],$subject,$message,"From: $from\n");
	echo "<br>";

	echo "<br>";
 }
 ?>
 
 