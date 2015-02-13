<?php 
include "db.php";
$id= $_POST['id']; 
$templates = mysqli_query($link, "select * from mail_tamplates where subject='$id'");
$body = mysqli_fetch_array($templates);
if(isset($_SESSION['body'])){
session_destroy();
}
session_start();
$_SESSION['body'] = $body['body'];
$_SESSION['subject'] = $body['subject'];
?>