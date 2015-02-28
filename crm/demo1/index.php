<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="background-image:url(images.jpg);width:100%; height:100%;background-repeat: no-repeat;background-size:100% 1000% ">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style type="text/css">
.contain { width:500px; margin:0 auto; border:2px green ; margin-top:15px; min-height:200px; padding:10px; }
input { font-size:15px; color:#06C; padding:10px; width:200px; margin-top:25px; }
.labelname { font-size:20px; font-weight:bold; font-family:Tahoma, Geneva, sans-serif; color:#33C; padding:10px; }
#submit { width:100px; height:30px; padding:2px; background-color:#999;}
h2 { color:#F00; font-size:22px; background-color:#CCC; padding:10px; }
h4 { color:#333; font-size:18px;}
</style>
</head>

<body >
<div style=" border: 2px solid;text-align:center;
    padding: 16px;
    background: #dddddd;
    border-bottom-right-radius: 1em;
    border-bottom-left-radius: 1em;>
    <h1 style="font-family:Elephant"><span style="color:green">WELCOME</span><span style="color:red">TO</span><span style="color:green">CRM</span></h1>

</div>

<div class="contain" align="center" style="border-top-left-radius:1em">

<form method="post" name="login" action="login.php" autofocus style="background-color: lightsteelblue;margin-top: 28%;">
<label for="name" class="labelname"> Username </label>
 <input type="text" name="username" id="userid" required="required" placeholder="Enter User name" /><br />
<label for="name" class="labelname"> Password </label>
<input type="password" name="password" id="passid" required="required" placeholder="Enter Password" /><br />


<input type="submit" name="submit" id="submit"  value="Login" style="background-color: rgb(197, 194, 191);;margin-left:18%" />
</form>
</div>
<div style=" border: 2px solid;text-align:center;
    margin-top:15%;
    padding: 10px;
    background: #dddddd;
    border-top-right-radius: 1em;
    border-top-left-radius: 1em;>
    <h1 style="font-family:strong"><span style="color:green">Powered</span><span style="color:red">By</span><span style="color:green">Bigperl</span></h1>

</div>
</body>
</html>