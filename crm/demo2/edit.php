<html>
<?php
include("session.php");
?>
<body>
<?php
include('config.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$password=$_POST['password'];
$query3=mysqli_query($link,"update logintb set name='$name', password='$password' where id='$id'");
if($query3)
{
header('location:changepassword.php');
}
}

$query1=mysqli_query($link,"select * from logintb where id='$id'");
$query2=mysqli_fetch_array($query1);
?>
<form method="post" action="" style="margin-left: 35%;
margin-top: 18%;">
<fieldset style="width: 3px;">
<table><tr><td>
Name</td><td><input type="text" name="name" value="<?php echo $query2['name']; ?>" /></td></tr>
<tr><td>
password</td><td><input type="text" name="password" value="<?php echo $query2['password']; ?>" /></td></tr>
<tr><td></td><td>
<input type="submit" name="submit" value="update" /></td></tr></table>
</fieldset>
</form>
<?php
}
?>
</body>
</html>