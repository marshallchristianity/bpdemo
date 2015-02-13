<?php 
include "../connection.php";
if($_POST)
{ 

//if ($_FILES["file"]["error"] > 0)
//{
// if there is error in file uploading 
//echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
//}
//else
{
//Counting rows and putting image name same as id.
$count=1;
$sql="select * from restaurant";
$result=mysql_query($sql);
 $count=mysql_num_rows($result);
if($count >= 1)
$count=$count+1;

if($count ==0)
$count=1;


$img_name=$count.".jpg";

  //move_uploaded_file function will upload your image.  if you want to resize image before uploading see this link http://b2atutorials.blogspot.com/2013/06/how-to-upload-and-resize-image-for.html
//if(move_uploaded_file($_FILES["file"]["tmp_name"],"images/" .$img_name))

{

// If file has uploaded successfully, store its name in data base
echo $query_image = "insert into restaurant(ID,NAME,LOCATION,AREA,RATE,IMAGE) values ('".$count."','".$_POST['name']."','".$_POST['location']."','".$_POST['area']."','".$_POST['rate']."','". $img_name."')";
if(mysql_query($query_image))
{
echo "Success";
}
else
{
echo 'Failed';
}
}
}



}
?>


<html>
<body>

<form action="" method="post"enctype="multipart/form-data">

<table>
<tr>
<td>Restaurant</td>
<td><input type=text name=name></td>
</tr>

<tr>
<td>Location</td>
<td><input type=text name=location></td>
</tr>

<tr>
<td>Area</td>
<td><input type=text name=area></td>
</tr>
<tr>
<td>Rate</td>
<td><input type=text name=rate></td>
</tr>

<tr><td><label for="file">Upload image:</label></td><td>
<input type="file" name="file" id="file" /> </td>
</td></tr><tr><td></td><td>
<input type="submit" name="submit" value="submit" /></td></tr>
</table>
</form>
</body>
</html>