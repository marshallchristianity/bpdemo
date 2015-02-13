<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GNANA SIRI EDUCATION TRUST (R) JAGALUR</title>
<link href="css/adminstyle.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="//code.jquery.com/jquery-latest.js"></script>
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
.header{
margin-top: -20px !important;
width: 1100px;
margin: 0 auto;
}
.my-form{width:900px;margin:0 auto;margin-top:40px;}
.label_text{width:200px;font-size: 14px;
margin-right: 40px;}
.fieldv{width:200px;height:25px;}
</style>
</head>

<body>
<div id="div_wrapper">
<div id="div_container">
<table width="986" align="center" border="0" cellpadding="0" cellspacing="0" style="border:1px #aaaaaa solid; margin-top:30px; border-top:none; border-radius:10px; ">
		<tr>
            <td id="div-consol-topimg">
            	<span class="admin-txt-mintit" style="top:-5px;">
                  GNANA SIRI EDUCATION TRUST (R) JAGALUR                                        
                </span>
                  <span style="float:right; color:#FFF; margin-right:31px;"><a  style="color: #FFF; text-decoration:none;" href='students.php'  >Students</a> 
				</span>
            </td>
         </tr>
     <tr>
  
    <td>
  
		
	<?php include("db.php"); 
if(isset($_GET['id'])){
$results = mysqli_query($con, "select * from  js_studentinfo where student_id ='$_GET[id]'");
$result = mysqli_fetch_array($results);
$results1 = mysqli_query($con, "select * from  js_subjectinfo where student_id ='$_GET[id]'");
$count = $results1->num_rows;
}else{
$count = "";
}
?>
	<div class="my-form">
		<form action="" method="post" role="form">
			<input class="fieldv" type="hidden" name="student_id" value="<?php echo isset($result['student_id']) ? $result['student_id'] : ''; ?>">
			<div><label class="label_text">roll no</label><input class="fieldv" type="text" name="roll_no" value="<?php echo isset($result['roll_no']) ? $result['roll_no'] : ''; ?>"></div><br/>
			<div><label class="label_text">Student name</label><input class="fieldv" type="text" name="student_name" value="<?php echo isset($result['student_name']) ? $result['student_name'] : ''; ?>"></div><br/>
			<div><label class="label_text">DOB</label><input class="fieldv" type="date" name="DOB" value="<?php echo isset($result['DOB']) ? $result['DOB'] : ''; ?>"></div><br/>
			<div><label class="label_text">father name</label><input class="fieldv" type="text" name="father_name" value="<?php echo isset($result['father_name']) ? $result['father_name'] : ''; ?>"></div><br/>
			<div><label class="label_text">mother name</label><input class="fieldv" type="text" name="mother_name" value="<?php echo isset($result['mother_name']) ? $result['mother_name'] : ''; ?>"></div><br/>
			<div><label class="label_text">class</label><input class="fieldv" type="text" name="class" value="<?php echo isset($result['class']) ? $result['class'] : ''; ?>"></div><br/>
			<?php if($count == ""){ ?>
			<p class="text-box">
                <label for="box1">Subject <span class="box-number">1</span></label>
                <input class="fieldv" type="text" name="subject[]" value="" id="subject1" />
				<label for="box1">Total Marks</label>
                <input class="fieldv" type="text" name="total_marks[]" value="" id="total_marks1" />
				<label for="box1">Obtained Marks</label>
                <input class="fieldv" type="text" name="obtained_marks[]" value="" id="obtained_marks1" />
                <a class="add-box" href="#">Add More</a>
            </p>
			<?php }else{
			$i =1; ?>
			<a class="add-box" href="#">Add More</a>
			<?php	while($row = mysqli_fetch_array($results1)){ ?>
					<p class="text-box">
						<label for="box1">Subject <span class="box-number"><?php echo $i; ?></span></label>
						<input class="fieldv" type="text" name="subject[]" value="<?php echo isset($row['subject']) ? $row['subject'] : ''; ?>" id="subject1" />
						<label for="box1">Total Marks</label>
						<input class="fieldv" type="text" name="total_marks[]" value="<?php echo isset($row['total_marks']) ? $row['total_marks'] : ''; ?>" id="total_marks1" />
						<label for="box1">Obtained Marks</label>
						<input class="fieldv" type="text" name="obtained_marks[]" value="<?php echo isset($row['obtained_marks']) ? $row['obtained_marks'] : ''; ?>" id="obtained_marks1" />
						<a href="#" class="remove-box">Remove</a>
						
					</p>
			<?php	$i++; }
			} ?>
			<input class="fieldv" type="submit" name="submit" value="add">
		</form>
	</div>
	<?php 
	
		if(isset($_POST['submit']) && $_POST['student_id'] == ""){
		
			$sql = mysqli_query($con, "INSERT INTO `js_studentinfo`(`roll_no`, `student_name`, `DOB`, `father_name`, `mother_name`, `class`) VALUES ('$_POST[roll_no]','$_POST[student_name]','$_POST[DOB]','$_POST[father_name]','$_POST[mother_name]','$_POST[class]')");
			
			
			$student_id = mysqli_insert_id($con); 
			
			if($student_id != '' && count($_POST['subject']) >0 ){
			for($i=0;$i<=count($_POST['subject'])-1;$i++){
					$subject = $_POST['subject'][$i];
					$total_marks = $_POST['total_marks'][$i];
					$obtained_marks = $_POST['obtained_marks'][$i];
					$sql1 = mysqli_query($con, "INSERT INTO `js_subjectinfo`(`student_id`,`subject`, `total_marks`, `obtained_marks`) VALUES ('$student_id ','$subject', '$total_marks','$obtained_marks')");
				}
			}
			header("location:students.php");
		}
		if(isset($_POST['submit']) && $_POST['student_id'] != ""){
		
			$sql = mysqli_query($con, "UPDATE `js_studentinfo` SET `roll_no`='$_POST[roll_no]',`student_name`='$_POST[student_name]',`DOB`='$_POST[DOB]',`father_name`='$_POST[father_name]',`mother_name`='$_POST[mother_name]',`class`='$_POST[class]' WHERE student_id = '$_POST[student_id]'");
			$sql1 = mysqli_query($con, "delete from `js_subjectinfo` where student_id = '$_POST[student_id]'");
			if($sql1){
			for($i=0;$i<=count($_POST['subject'])-1;$i++){
					$subject = $_POST['subject'][$i];
					$total_marks = $_POST['total_marks'][$i];
					$obtained_marks = $_POST['obtained_marks'][$i];
					$sql1 = mysqli_query($con, "INSERT INTO `js_subjectinfo`(`student_id`,`subject`, `total_marks`, `obtained_marks`) VALUES ('$_POST[student_id]','$subject', '$total_marks','$obtained_marks')");
				}
			}
			header("location:students.php");
		}
	?>
	

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
<script type="text/javascript">
jQuery(document).ready(function($){
    $('.my-form .add-box').click(function(){
        var n = $('.text-box').length + 1;
        if( 8 < n ) {
            alert('Stop it!');
            return false;
        }
        var box_html = $('<p class="text-box"><label for="box' + n + '">Subject <span class="box-number">' + n + '</span></label> <input class="fieldv" type="text" name="subject[]" value="" id="subject' + n + '" /><label for="box' + n + '">Total Marks </label> <input class="fieldv" type="text" name="total_marks[]" value="" id="total_marks' + n + '" /><label for="box' + n + '">Obtained Marks </label> <input class="fieldv" type="text" name="obtained_marks[]" value="" id="obtained_marks' + n + '" /> <a href="#" class="remove-box">Remove</a></p>');
        box_html.hide();
        $('.my-form p.text-box:last').after(box_html);
        box_html.fadeIn('slow');
        return false;
    });
    $('.my-form').on('click', '.remove-box', function(){
        $(this).parent().css( 'background-color', '#FF6C6C' );
        $(this).parent().fadeOut("slow", function() {
            $(this).remove();
            $('.box-number').each(function(index){
                $(this).text( index + 1 );
            });
        });
        return false;
    });
});
</script>
