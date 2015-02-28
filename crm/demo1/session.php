<?php
include('db.php');
session_start();
if(!isset($_SESSION['login_username']))
{
header("Location:index.php");
exit;
}
$check=$_SESSION['login_username'];
$session=mysql_query("select name from logintb where name='$check'");
$row=mysql_fetch_array($session);
$login_session=$row['name'];
if(!isset($login_session))
{
header("Location:index.php");
exit;
}
?>