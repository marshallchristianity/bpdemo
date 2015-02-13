<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Console</title>
<link href="css/adminstyle.css" rel="stylesheet" type="text/css" />

<script src="js/jquery.js"></script>


<style>
@font-face{font-family: Lobster;src: url('css/Lobster.otf');}
body{width:100%;padding:0px;margin:0px;}
.wrapper{ margin: 20px 0 0 50px;}
.cvteste{color:#000;font-size:12px;font-family:verdana}
h1{text-align:center;font-family: Lobster;}
.ui-widget-content {margin-left:45px;}
.ui-widget{font-family:Arial; color:#fff;}
.ui-jqgrid .ui-jqgrid-hdiv {height:25px;}
.ui-jqgrid tr.jqgrow td{height:40px;}
.ui-jqgrid .ui-jqgrid-pager {height:40px;}
.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
  background: #4297d7;font-weight: bold;color:#000;font-size:13px;border: 1px solid #4297d7;}
.ui-widget-content{border: 1px solid #4297d7;}
.txt{width:250px;height:30px;border-radius:5px;border: 1px solid #4297d7;}
.myAltRowClass { background-color: #DDDDDC; background-image: none; }
#editlogo {
  background-image: url(images/file_edit.png);
  background-repeat: no-repeat;
  display: block;
  margin: 0 auto;
  text-indent: -9999px;
  width: 20px;
  height: 20px;
}
.colo-td {
	font-family:Arial, Helvetica, sans-serif;
	font-size:15px;
	color:#000;
}
td{padding:20px;}
.header{
margin-top: -20px !important;
width: 1100px;
margin: 0 auto;
}
</style>
</head>

<body>
<div id="div_wrapper">
<div id="div_container">
<table width="986" align="center" border="0" cellpadding="0" cellspacing="0" style="border:1px #aaaaaa solid; margin-top:30px; border-top:none; border-radius:10px; ">
		<tr>
            <td id="div-consol-topimg">
            	<span class="admin-txt-mintit">
                  STUDENT INFORMATION                                             
                </span>
                  <span style="float:right; color:#FFF; margin-right:31px;"><a  style="color: #FFF; text-decoration:none;" href='studentinfo.php'  >ADD STUDENT</a> 
				</span>
            </td>
         </tr>
     <tr>
  
    <td>
  
		
	<?php include("db.php"); ?>
<form action="" method="post">
	Roll No: <input type="text" name="search" required>
	<input type="submit" name="submit" value="search" >
</form>
	<?php if(isset($_POST['submit'])){
	$roll_no = $_POST['search'];
	$sql = mysqli_query($con,"select * from js_studentinfo where roll_no = '$roll_no'");
	$result = mysqli_fetch_array($sql);
	$student_id = $result['student_id'];
	$sql1 = mysqli_query($con,"select * from js_subjectinfo where student_id = '$student_id'");
	?>
	
<div style="width:900px;margin:0 auto;margin-top:50px;">
	<table border="1" style="border-collapse: collapse;width:900px;">
		<tr>
			<td><strong>Name of the Student :</strong></td>
			<td><?php echo $result['student_name']; ?></td>
			<td><strong>Date Of Birth :</strong></td>
			<td><?php echo $result['DOB']; ?></td>
		</tr>
		<tr>
			<td><strong>Father's Name :</strong></td>
			<td><?php echo $result['father_name']; ?></td>
			<td><strong>Mother's Name : </strong></td>
			<td><?php echo $result['mother_name']; ?></td>
		</tr>
		<tr>
			<td><strong>Class : </strong></td>
			<td><?php echo $result['class']; ?></td>
			<td><strong>Roll No : </strong></td>
			<td><?php echo $result['roll_no']; ?></td>
		</tr>
	</table>
	<?php if($sql1->num_rows > 0){ ?>
	<table border="1" style="border-collapse: collapse;width:900px;margin-top:5xp;">
		<tr>
			<th><strong>Subject :</strong></th>
			<th><strong>Total Marks :</strong></th>
			<th><strong>Obtained Marks :</strong></th>
		</tr>
		<?php
		$total = mysqli_query($con, "SELECT SUM(total_marks) FROM js_subjectinfo where student_id = '$student_id'");
		$total_marks = mysqli_fetch_array($total);	
		$obtained = mysqli_query($con, "SELECT SUM(obtained_marks) FROM js_subjectinfo where student_id = '$student_id'");
		$obtained_marks = mysqli_fetch_array($obtained);
	
		while($row = mysqli_fetch_array($sql1)){ ?>
			<tr>
				<td><?php echo $row['subject']; ?></td>
				<td><?php echo $row['total_marks']; ?></td>
				<td><?php echo $row['obtained_marks']; ?></td>
			</tr>
		<?php } ?>
		<tr>
			<td style="text-align:center;"><strong>Total :</strong></td>
			<td style="text-align:center;"><strong><?php echo $total_marks[0]; ?></strong></td>
			<td style="text-align:center;"><strong><?php echo $obtained_marks[0]; ?></strong></td>
		</tr>
	</table>
	<?php } ?> 
</div>
	
	<?php
	} ?>
	
	

    </td>
  
    </tr>
  
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<div style="clear:both; height:30px;">&nbsp;</div>
</div>
</div>
</body>
</html>
