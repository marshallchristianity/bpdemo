<html>
<body>
<?php
include('config.php');
if(isset($_POST['submit']))
{
$name=mysql_real_escape_string($_POST['name']);
$password=mysql_real_escape_string($_POST['password']);
$query1=mysqli_query($link,"insert into logintb values('','$name','$password')");
echo "insert into logintb values('','$name','$password')";
if($query1)
{
header("location:changepassword.php");
}
}
?>
<fieldset style="width:300px;margin-left: 35%;
margin-top: 18%;">
<form method="post" action="">
<table><tr><td>
Name</td><td><input type="text" name="name" placeholder="Enter User Name" required></td></tr><tr><td>
password</td><td><input type="text" name="password" placeholder="Enter Password" required></td></tr>
<tr><td></td><td>
<input type="submit" name="submit"></td></tr></table>
</form>
</fieldset>
</body>
</html>
