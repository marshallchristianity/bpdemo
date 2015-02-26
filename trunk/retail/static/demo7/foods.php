<html>

<head></head>
<?php include 'headerf.php' ?>
<table border="1" width="80%" align="center" >
<tr>
<td>
<body style="background-color:azure">
<br/>
<br/>
<?php include "connection.php"; ?>
<form action="" method=post style="margin-left: 328;">
<fieldset style="width: 355;height: 57;background-color: rgb(111, 160, 143);">
Search Restaurant:<br>
Location:
<select name=location>
<option value="">All</option>
<?php
$sql="select distinct LOCATION from restaurant";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result))
{	if(isset($_POST['location']) && ($_POST['location']==$row['LOCATION']))
	echo "<option selected>".$row['LOCATION']."</option>";
	else
	echo "<option>".$row['LOCATION']."</option>";
} 
?>
</select>
Area:
<select name=area>
<option value="">All</option>
<?php
$sql="select distinct AREA from restaurant";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result))
{	if(isset($_POST['area']) && ($_POST['area']==$row['AREA']))
	echo "<option selected>".$row['AREA']."</option>";
	else
	echo "<option>".$row['AREA']."</option>";
} 
?>
</select>
<input type=submit value=submit>
</fieldset>
</form><br><br>
<?php

 $sql = "SELECT * FROM restaurant ";
 
 if($_POST)
 {
 $sql=$sql."where LOCATION = '".$_POST['location']."' and AREA='".$_POST['area']."'";
 }
 //echo $sql;
 
 $result = mysql_query($sql);
 if(mysql_num_rows($result) > 0)
 {
   while($row = mysql_fetch_array($result))
    
   {	ECHO"<table bgcolor=skyblue width=70% rules=all align=center><tr><td width=30%>";
   
        
         
       //  echo '<img alt="" src="admin/images/'.$row["IMAGE"].' " height=100px>';
		// echo "</td><td>Location:".$row["LOCATION"]."</td></tr><tr><td>";
		// echo "Area:".$row["AREA"]."</td><td>Rate:".$row["RATE"]."</td></tr></table><br>";
		
		echo '<img alt="" src="admin/images/'.$row["IMAGE"].' " height=100px>';
		echo "</td><td>Location:".$row["LOCATION"]."</td><td>";
		echo "Area:".$row["AREA"]."</td><td>Rate:".$row["RATE"]."</td></tr></table><br>";
		
   }
 }
 else
 {
  echo 'File name not found in database';
 }
?>



</td>
</tr>
</table>
</body><br/>
<?php include 'footer.php' ?>

</html>