<?php 
	require_once("db.php"); // 1. require the database file 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"> </script> 
<script type="text/javascript">
jQuery(function($) {
	$("form input[id='check_all']").click(function() { // triggred check
		
		var inputs = $("form input[type='checkbox']"); // get the checkbox
		
		for(var i = 0; i < inputs.length; i++) { // count input tag in the form 
			var type = inputs[i].getAttribute("type"); //  get the type attribute
				if(type == "checkbox") {
					if(this.checked) {
						inputs[i].checked = true; // checked
					} else {
						inputs[i].checked = false; // unchecked
				 	 }
				} 
		}
	});
	
	$("form input[id='delete']").click(function() {  // triggred submit
		
		var count_checked = $("[name='data[]']:checked").length; // count the checked
		if(count_checked == 0) {
			alert("Please select a list to delete.");
			return false;
		} 
		if(count_checked == 1) {
			return confirm("Are you sure you want to delete these list?");	
		} else {
			return confirm("Are you sure you want to delete these lists?");	
		  }		
	});
	
		$("form input[id='email']").click(function() {  // triggred submit
		
		var count_checked = $("[name='data[]']:checked").length; // count the checked
		if(count_checked == 0) {
			alert("Please select a list to email.");
			return false;
		} 
		if(count_checked >= 1) {
		$(".popbox").show();
		return false;
		
		}	
	});
	$(".close").click(function(){
			$(".popbox").hide();
		});
$('#myForm input[name=select]').on('change', function() {
   var val = $('input[name=select]:checked', '#myForm').val();
	if(val == "range"){
		$("#rangebox").show();
	}else{
		$("#rangebox").hide();
	}
});
}); // jquery end
</script>
</head>

<body>

<img src="logo.PNG" style="margin-left:15%"><br/>
<h2 style="font-family:Britannic Bold"><span style="color:red">STUDENT</span><span style="color:green">INFORMATION</span></h2>
<div style="float:right;">
<a href="admin/student.php?data=addauto">Student Register</a>
</div>
<table width="100%">
<tr>
<?php include 'menu.php' ?>
</tr>
</table>
<div class=CSSTableGenerator style="border-width: thick;background-color: darkseagreen;">
<form name="" action="" method=post>
<h2 class="filter-table" style="color:#104972">Search: 
<select name="column">
<option value="">select column</option>
<option value="name" <?php if(isset($_POST['column']) == "name"){ echo "selected"; }?>>Name</option>
<option value="email" <?php if(isset($_POST['column']) == "email"){ echo "selected"; }?>>Email</option>
<option value="course" <?php if(isset($_POST['column']) == "course"){ echo "selected"; }?>>Course</option>
<option value="dob" <?php if(isset($_POST['column']) == "dob"){ echo "selected"; }?>>DOB</option>
<option value="paidDate" <?php if(isset($_POST['column']) == "paidDate"){ echo "selected"; }?>>Paid Date</option>
<option value="due_ammount_follow_up_date" <?php if(isset($_POST['column']) == "due_ammount_follow_up_date"){ echo "selected"; }?>>Due Amount FollowUp Date</option>
</select>
<input placeholder="search any field" name="search" type="search" value="<?php echo isset($_POST['search']) ? $_POST['search'] : '';?>">
<input type="submit" name="searching" value="submit">
<input type="submit" name="reset" value="Reset"/></h2>
</form>	
         <form action="delete.php?table=autocomplete" method="post" name="data_table" id="myForm">
        <table id="table_data" rules=all>
		
        	<tr> 
				<td>Check All <input type="checkbox" id="check_all" value=""></td>
            	
            	<td>name</td>
				<td>DOB</td>
				<td>Gender</td>
                <td>email</td>
               <td>Phone</td>
			   <td>Course</td>
				<td>Degree</td>
				<td>Fee</td>
				<td>Tax</td>
				<td>total</td>
				<td>Paid Date</td>
				<td>Action</td>
            </tr>
		
            <?php 
		if(isset($_POST['searching'])){
			$sql = "SELECT * FROM `autocomplete` WHERE $_POST[column] like '$_POST[search]%' union
					select * from autocomplete where $_POST[column] like '%$_POST[search]' union
					select * from autocomplete where $_POST[column] like '%$_POST[search]%' order by id DESC";
		}else{
			$sql="select * from autocomplete order by id DESC";
		}
		
		if(isset($_POST['reset'])){
		$sql="select * from autocomplete order by id DESC";
		}
					$result=mysqli_query($link, $sql);

				while($row = mysqli_fetch_array($result)) {
			?>
            <tr> 
				<td><input type="checkbox" value="<?php echo $row['id']; ?>" name="data[]" id="data"></td>
            	
            	<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['dob']; ?></td>
				<td><?php echo $row['sex']; ?></td>
                <td><?php echo $row['email']; ?></td>
                 <td><?php echo $row['phone']; ?></td>
				  <td><?php echo $row['course']; ?></td>
                 <td><?php echo $row['degree']; ?></td>
				  <td><?php echo $row['fee']; ?></td>
				   <td><?php echo $row['tax']; ?></td>
				   <td><?php echo $row['total']; ?></td>
                 <td><?php echo $row['paidDate']; ?></td>
				<td> <a href='admin/student.php?data=editauto&page=<?php echo $row['id']; ?>'>EDIT</a></td>
            </tr>
            <?php 
				} unset($row); // unset the query after perform
			?>
          
        </table>
        <br />
		<div style="position:absolute;display:none;background:linear-gradient(to bottom,#fff2c8 0,#fffbf0 100%);width:450px;height:300px;border: solid 1px #e5d696;color: #333;
font: normal 12px arial;z-index: 1003;left: 420px;
top: 270px;" class="popbox">
			<div><h1 style="text-align:center;">Send Email<span style="margin-left:290px;cursor:pointer;" class="close">X</span></h1></div>
	
			<input type="submit" name="sendemail" id="sendemail" style="float:right;">
		</div>
        <input name="delete" type="submit" value="Delete" id="delete">
		 <input name="email" type="submit" value="send email" id="email">
       </form>
	 </div> <!--wrap end-->
</body>
</html>