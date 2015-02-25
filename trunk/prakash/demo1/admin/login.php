<?php
	session_start();
	include('include/config.php');
	if(isset($_GET['session'])=='logout'){
		unset($_SESSION['adminid']);
		header('location:login.php');
	}

	if(isset($_POST['submit'])){
		$email=$_POST['email'];
		$pass=md5($_POST['password']);
		
		$query=mysqli_query($db_connect, "select * from adminuser where email='".$email."' and password='".$pass."'");
		
		//Check whether the admin with the passed email and password
		
		if(count($query)>0){
			if($result=mysqli_fetch_array($query)){
				$_SESSION['adminid']=$result['admin_id'];
				$_SESSION['username']=$result['name'];
				$_SESSION['email']=$result['email'];
				
			}
			
			header('location:index.php?data=pages');
		}
		else{
		
			header("location:".$_SERVER['PHP_SELF']."?msg=failure");
		}
	}
	if(isset($_POST['forgot'])){
		$email=$_POST['email'];
		
		
		$query=mysql_query("select * from adminuser where email='".$email."'");
		if(mysql_num_rows($query)>0){
			if($result=mysql_fetch_array($query)){
				$login_details="Dear Admin,<br/>
				Here is your Password:".$result['original_pwd']."
				";
				$subject =  'Your Password';
				$bound_text = "Your Password";
				$bound = "--".$bound_text."\r\n";
				$bound_last = "--".$bound_text."--\r\n";
				$headers = "From: The Sender <info@medirentindia.com>\r\n";
				$headers .= "MIME-Version: 1.0\r\n"
			  ."Content-Type: multipart/mixed; boundary=\"$bound_text\"";
				$message .= "If you can see this MIME than your client doesn't accept MIME types!\r\n"
				.$bound;
			   
				$message .= "Content-Type: text/html; charset=\"iso-8859-1\"\r\n"
				."Content-Transfer-Encoding: 7bit\r\n\r\n"
				.$login_details."\r\n"
				.$bound;
			
				mail('bluenile04@rediffmail.com', $subject, $message,$headers);
			}
		}
		else{
			header("location:".$_SERVER['PHP_SELF']."?msg=emailfailure");
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Prakash Engineers Admin Panel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- The styles -->
	<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/rajesh.css" rel="stylesheet">
	<link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='css/fullcalendar.css' rel='stylesheet'>
	<link href='css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='css/chosen.css' rel='stylesheet'>
	<link href='css/uniform.default.css' rel='stylesheet'>
	<link href='css/colorbox.css' rel='stylesheet'>
	<link href='css/jquery.cleditor.css' rel='stylesheet'>
	<link href='css/jquery.noty.css' rel='stylesheet'>
	<link href='css/noty_theme_default.css' rel='stylesheet'>
	<link href='css/elfinder.min.css' rel='stylesheet'>
	<link href='css/elfinder.theme.css' rel='stylesheet'>
	<link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='css/opa-icons.css' rel='stylesheet'>
	<link href='css/uploadify.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="../img/favicon.ico">
		
</head>

<body style="margin-left:0px !important">
		<div class="container-fluid">
		<div class="row-fluid">
		
			<div class="row-fluid">
				<div class="span12 center login-header">
					<h2>Welcome to Prakash Engineers</h2>
				</div><!--/span-->
			</div><!--/row-->
			
			<div class="row-fluid">
				<div class="well span5 center login-box">
					<?php
						if(isset($_GET['msg'])=='failure'){
					?>
					<div class="alert alert-info">
						Please login with your Username and Password.
					</div>
					<?php
					}
					?>
					<form class="form-horizontal" action="" method="post">
						<fieldset>
							<div class="input-prepend" title="Username" data-rel="tooltip">
								<span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="email" id="username" type="email" value="" required placeholder="Email" />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password" data-rel="tooltip">
								<span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password" value="" placeholder="Password"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend">
							<label class="remember" for="remember"><a href="#?" id="forget">Forgot Password ?</a></label>
							</div>
							<div class="clearfix"></div>

							<p class="center span5">
							<button type="submit" class="btn btn-primary" name="submit">Login</button>
							</p>
						</fieldset>
					</form>
				</div><!--/span-->
				<div class="well span5 center forgot-box" style="display:none">
					<?php
						if(isset($_GET['msg'])=='success'){
					?>
					<div class="alert alert-info">
						Password has been sent your email
					</div>
					<?php
					}
					?>
					<form class="form-horizontal" action="" method="post">
						<fieldset>
							<div class="input-prepend" title="Username" data-rel="tooltip">
								<span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="email" id="username" type="email" value="" required placeholder="Email" />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend">
							<label class="remember" for="remember"><a href="#?" id="login">Login</a></label>
							</div>
							<div class="clearfix"></div>

							<p class="center span5">
							<button type="submit" class="btn btn-primary" name="forgot">Get Password</button>
							</p>
						</fieldset>
					</form>
				</div><!--/span-->
			</div><!--/row-->
				</div><!--/fluid-row-->
		
	</div><!--/.fluid-container-->

	
	
		
</body>
</html>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script>
	$(document).ready(function(){
		
		$("#forget").click(function(){
			
			$(".forgot-box").fadeIn();
			$(".login-box").fadeOut();
		});
		$("#login").click(function(){
			
			$(".login-box").fadeIn();
			$(".forgot-box").fadeOut();
		});
	})
	
</script>
