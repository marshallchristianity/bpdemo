<?php 
include('db.php');
session_start();

	echo $user=$_POST['username'];
	echo $pass=$_POST['password'];
    $fetch=mysqli_query($link,"select id from logintb where name='$user' and password='$pass'");
    $count=mysqli_num_rows($fetch);
    if($count!="")
    {
    $_SESSION['login_username']=$user;
	header("Location:profile.php");	
    }
    else
    {
	  
	 //  header('Location:index.php');
	   header('Location:indexer.php?name="Enter Correct User name and password"');
	  // echo "invalid username and password";
	}
	
	
	


?>