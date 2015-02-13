<html>
<body>
<table border="1" width="80%" height="7%" align="center">
<tr>
<td>



<html>
<head>
 <link href="StyleSheet3.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--<div align="center" style="background: rgb(0, 0, 0);">-->
<div align="center" >
<!--<div align="center"> -->

<?php
if(isset($_GET['id']))
$id=$_GET['id'];
else
$id="1";
?>
<table style="align:center;background: rgb(0, 0, 0)" width="100%" height="4%">
<td>
<div id='cssmenu'>
<ul>
  
   <li <?php if($id=='1'){?>class='active'<?php } ?>><a href='index.php?id=1'><span>Home</span></a></li>
   <li <?php if($id=='2'){?>class='active'<?php } ?>><a href='brands.php?id=2'><span>Theme</span></a></li>
   <li <?php if($id=='3'){?>class='active'<?php } ?>><a href='backgroundcolor.php?id=3'><span>Color Changing</span></a></li>
  
   
  
    
   <li <?php if($id=='5'){?>class='active'<?php } ?>><a href='colorblock.php?id=5'><span>Color Picker</span></a><li>

</ul>
</div>
		
    <!-- end of menu -->
	
</td>
</table>
</div>

</body>

</html>






</td>
</tr>
</table>
</body>
</html>