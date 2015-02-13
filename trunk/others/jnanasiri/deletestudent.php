<?php include("db.php"); 
if(isset($_GET['id'])){
$sql = mysqli_query($con, 	"DELETE FROM `js_studentinfo` WHERE student_id = '$_GET[id]'");
header("location:students.php");
}
?>