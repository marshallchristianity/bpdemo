<?php
include('config.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1=mysql_query("Delete from logintb where id='$id'");
if($query1)
{
header('location:changepassword.php');
}
}


?>