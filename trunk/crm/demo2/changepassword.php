<?php
include("session.php");
?>
<html lang="en">
		<head>
			<meta charset="utf-8" />
			
			<link rel="stylesheet" type="text/css" href="index.css">
			
			
				<script>
				
				 var menu="";
					
					function highlight(menu)
					{
						document.getElementById(menu).src=menu+"1.png";
					
					
					}
				
					function undo_highlight(menu)
					{
						document.getElementById(menu).src=menu+".png";
						
					}
				
				</script>
			
		</head>
		
		
		
		<body align="center" bgcolor="white" >
		<!--<h3 align="center"><span class="usrname"><?php echo $login_session; ?> </span> </h3> <h2 align="center" ></h2> -->

		
			<img src="logo.PNG"  >
			    <div align="center" style="margin-top:70">
				<a href="profile.php"><input type="submit" value="Home"></a>
				<?php include 'setting.php'?>
				</div>
			
		</body>
</html>

