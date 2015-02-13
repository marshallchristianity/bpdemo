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
<style>
ul.pagination {
    text-align:center;
    color:#829994;
}
ul.pagination li {
    display:inline;
    padding:0 3px;
}
ul.pagination a {
    color:#0d7963;
    display:inline-block;
    padding:5px 10px;
    border:1px solid #cde0dc;
    text-decoration:none;
}
ul.pagination a:hover,
ul.pagination a.current {
    background:#0d7963;
    color:#fff;
}
</style>
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
	
	$("form input[id='submit']").click(function() {  // triggred submit
		
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
<h2 style="font-family:Britannic Bold"><span style="color:red">Shine</span><span style="color:green">INFORMATION</span></h2>
<div style="float:right;">
<a href="admin/student.php?data=shine_data">Shine Register</a>
</div>
<table width="100%">
<tr>
<?php include 'menu.php' ?>
</tr>
</table>
<div style="margin-bottom:20px;">
<form action="export.php" method="post" enctype="multipart/form-data">
<input type="file" name="import" id="import"><span id="error" style="color:black;">
<input type="submit" value="submit" name="file_upload">
<?php if(isset($_GET['status']) && $_GET['status'] == 'failed'){ ?>
<span style="color:red;"><?php echo "please upload the file"; ?></span>
<?php } 
else if(isset($_GET['status']) && $_GET['status'] == 'wrong_extension'){?>
<span style="color:red;"><?php echo "only .csv files are allowed"; ?></span>
<?php }else{ ?>
<span style="color:red;"></span>
<?php } ?>
</form>
</div>
<div class=CSSTableGenerator style="border-width: thick;background-color: darkseagreen;">
<form name="" action="" method=post>
<h2 class="filter-table" style="color:#104972">Search: 
<select name="column">
<option value="">select column</option>
<option value="name" <?php if(isset($_POST['column']) == "name"){ echo "selected"; }?>>Name</option>
<option value="email" <?php if(isset($_POST['column']) == "email"){ echo "selected"; }?>>Email</option>
<option value="location" <?php if(isset($_POST['column']) == "location"){ echo "selected"; }?>>LOCATION</option>
<option value="dob" <?php if(isset($_POST['column']) == "dob"){ echo "selected"; }?>>DOB</option>
<option value="contact" <?php if(isset($_POST['column']) == "contact"){ echo "selected"; }?>>Phone no</option>
</select>
<input placeholder="search any field" name="search" type="search" value="<?php echo isset($_POST['search']) ? $_POST['search'] : '';?>">
<input type="submit" name="searching" value="submit">
<input type="submit" name="reset" value="Reset"/></h2>
</form>	

         <form action="delete.php?table=shinedata" method="post" name="data_table" id="myForm">
        <table id="table_data" rules=all>
		
        	<tr> 
				<td>Check All <input type="checkbox" id="check_all" value=""></td>
            	
            	<td>name</td>
				<td>DOB</td>
				<td>Gender</td>
                <td>email</td>
               <td>Phone</td>
			   <td>Location</td>
				<td>Work Exp</td>
				<td>Fee</td>
				<td>Tax</td>
				<td>total</td>
				<td>Paid Date</td>
				<td>Resume</td>
				<td>Action</td>
            </tr>
		
            <?php 
		if(isset($_POST['searching'])){
			include_once('function.php');
			$page = (int)(!isset($_GET["page"]) ? 1 : $_GET["page"]);
			if ($page <= 0) $page = 1;
			 
			$per_page = 10; // Set how many records do you want to display per page.
			 
			$startpoint = ($page * $per_page) - $per_page;
			$statement = "`shinedata` ORDER BY `id` DESC";
		
			$sql = "select * from `shinedata` WHERE $_POST[column] like '$_POST[search]%' union
					select * from shinedata where $_POST[column] like '%$_POST[search]' union
					select * from shinedata where $_POST[column] like '%$_POST[search]%' order by id DESC LIMIT {$startpoint} , {$per_page}";
			//echo $sql; exit;
			
		}else{
			include_once('function.php');
			$page = (int)(!isset($_GET["page"]) ? 1 : $_GET["page"]);
			if ($page <= 0) $page = 1;
			 
			$per_page = 10; // Set how many records do you want to display per page.
			 
			$startpoint = ($page * $per_page) - $per_page;
			 
			$statement = "`shinedata` ORDER BY `id` DESC"; // Change table name according to your database table.
			 
			$sql = "SELECT * FROM {$statement} LIMIT {$startpoint} , {$per_page}";
		}
		
		if(isset($_POST['reset'])){
			include_once('function.php');
			$page = (int)(!isset($_GET["page"]) ? 1 : $_GET["page"]);
			if ($page <= 0) $page = 1;
			 
			$per_page = 10; // Set how many records do you want to display per page.
			 
			$startpoint = ($page * $per_page) - $per_page;
			 
			$statement = "`shinedata` ORDER BY `id` DESC"; // Change table name according to your database table.
			 
			$sql = "SELECT * FROM {$statement} LIMIT {$startpoint} , {$per_page}";
		}
					$result=mysqli_query($link, $sql);

				while($row = mysqli_fetch_array($result)) {
			?>
            <tr> 
				<td><input type="checkbox" value="<?php echo $row['id']; ?>" name="data[]" id="data"></td>
            	
            	<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['dob']; ?></td>
				<td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['email']; ?></td>
                 <td><?php echo $row['contact']; ?></td>
				  <td><?php echo $row['location']; ?></td>
                 <td><?php echo $row['work_exp']; ?></td>
				  <td><?php echo $row['current_industry']; ?></td>
				   <td><?php echo $row['current_company']; ?></td>
				   <td><?php echo $row['highest_edu_level']; ?></td>
                 <td><?php echo $row['highest_edu_inst']; ?></td>
				  <td><?php echo $row['resume']; ?></td>
				<td> <a href='admin/student.php?data=editshine&page=<?php echo $row['id']; ?>'>EDIT</a></td>
            </tr>
            <?php 
				} unset($row); // unset the query after perform
			?>
          <?php echo pagination($statement,$per_page,$page); ?>
        </table>
        <br />
		<div style="position:absolute;display:none;background:linear-gradient(to bottom,#fff2c8 0,#fffbf0 100%);width:450px;height:300px;border: solid 1px #e5d696;color: #333;
font: normal 12px arial;z-index: 1003;left: 420px;
top: 270px;" class="popbox">
			<div><h1 style="text-align:center;">Send Email<span style="margin-left:290px;cursor:pointer;" class="close">X</span></h1></div>
			<div>
				<ul style="list-style:none;">
					<li><input type="radio" name="select" value="selected">Selected candidates only</li>
					
					<li><input type="radio" name="select" value="range">specify page range</li>
					<div id="rangebox" style="display:none;">
						From: <input type="text" name="from" id="from">
						To: <input type="text" name="to" id="to">
						<p>you can select upto 10 pages</p>
					</div>
				</ul>
				</ul>
			</div>
			<input type="submit" name="sendemail" id="sendemail" style="float:right;">
		</div>
        <input name="submit" type="submit" value="Delete" id="submit">
		 <input name="email" type="submit" value="send email" id="email">
       </form>
	 </div> <!--wrap end-->
</body>
</html>