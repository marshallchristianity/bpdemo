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
		<div style="position:absolute;margin-left:80%">
		<a href="logout.php">logout</a>
		</div>
		<div style="position:absolute;margin-left:90%">
		<a href="changepassword.php">setting</a>
		</div>
			<img src="logo.PNG"  >
			
				<div id="student" >
					<a href="student.php"><img src="a.png" id="a"   onmouseover="highlight('a')" onmouseout="undo_highlight('a')" style="margin-left:174"></a>
				</div>
				
				<div id="client" >
					<a href="client.php" ><img src="b.png" id="b"  onmouseover="highlight('b')" onmouseout="undo_highlight('b')" style="margin-left:223"  ></a>
				</div>
			
		</body>
</html>

