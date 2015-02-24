<?php include "connection.php"; ?>
<form action="" method=post>
Search restaurant:<br>
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
</form><br><br>
<?php

 $sql = "SELECT * FROM restaurant ";
 
 if($_POST)
 {
 $sql=$sql."where LOCATION = '".$_POST['location']."' and AREA='".$_POST['area']."'";
 }
 echo $sql;
 // This query will show you all images if you want to see only one image pass acc_id='$id' e.g. "SELECT * FROM acc_images acc_id='$id'".
 $result = mysql_query($sql);
 if(mysql_num_rows($result) > 0)
 {
   while($row = mysql_fetch_array($result))
   {	ECHO"<table bgcolor=skyblue width=30% rules=all border=1><tr><td width=50%>";
         echo '<img alt="" src="admin/images/'.$row["IMAGE"].' " height=100px>';
		 echo "</td><td>Location:".$row["LOCATION"]."</td></tr><tr><td>";
		 echo "Area:".$row["AREA"]."</td><td>Rate:".$row["RATE"]."</td></tr></table><br>";
   }
 }
 else
 {
  echo 'File name not found in database';
 }
?>

