<html>
<head>
 <link href="StyleSheet3.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--<div align="center" style="background: rgb(0, 0, 0);">-->
<div align="center" style="background-color:#B0BAAB">
<!--<div align="center"> -->

<?php
if(isset($_GET['id']))
$id=$_GET['id'];
else
$id="1";
?>
<table style="align:center;background: rgb(0, 0, 0)" width="80%" height="4%">
<td>
<div id='cssmenu'>
<ul>
  
   <li <?php if($id=='1'){?>class='active'<?php } ?>><a href='index.php?id=1'><span>Company</span></a></li>
   <li <?php if($id=='2'){?>class='active'<?php } ?>><a href='brands.php?id=2'><span>Brands</span></a></li>
   <li <?php if($id=='3'){?>class='active'<?php } ?>><a href='history.php?id=3'><span>History</span></a></li>
  
   
   <li><a href='http://bugatti-shoes.com/en.html'><span>Bugatti shoes</span></a></li>
    <li <?php if($id=='4'){?>class='active'<?php } ?>><a href='contact.php?id=4'><span>Contact</span></a></li>
   <li <?php if($id=='5'){?>class='active'<?php } ?>><a href='impress.php?id=5'><span>Impress</span></a><li>
</ul>
</div>
		
    <!-- end of menu -->
	
</td>
</table>
</div>

</body>

</html>