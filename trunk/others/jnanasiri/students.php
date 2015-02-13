<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GNANA SIRI EDUCATION TRUST (R) JAGALUR</title>
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
            <td id="div-consol-topimg" >
            	<span class="admin-txt-mintit" style="top:-5px;">
                  GNANA SIRI EDUCATION TRUST (R) JAGALUR
					
                </span>
                  <span style="float:right; color:#FFF; margin-right:31px;"><a  style="color: #FFF; text-decoration:none;" href='studentinfo.php'  >ADD STUDENT</a> 
				</span>
            </td>
         </tr>
     <tr>
  
    <td>
  
		
	<?php include("db.php"); 
	$results = mysqli_query($con, "select * from  js_studentinfo");
	if($results->num_rows >0){ ?>
		<table border="1" style="border-collapse:collapse;width:900px;margin:0 auto;margin-top:40px;">
			<tr>
				<th>Roll no</th>
				<th>Student name</th>
				<th>DOB</th>
				<th>Action</th>
			</tr>
		<?php while($row = mysqli_fetch_array($results)){ ?>
			<tr>
				<td><?php echo $row['roll_no']; ?></td>
				<td><?php echo $row['student_name']; ?></td>
				<td><?php echo $row['DOB']; ?></td>
				<td><a href="studentinfo.php?id=<?php echo $row['student_id']; ?>">edit</a>&nbsp; <a href="deletestudent.php?id=<?php echo $row['student_id']; ?>">delete</a><td>
			</tr>
		<?php } ?>
		</table>
	<?php } ?>
	
	

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
<style>
.colo-td {
	font-family:Arial, Helvetica, sans-serif;
	font-size:15px;
	color:#000;
}
</style>
