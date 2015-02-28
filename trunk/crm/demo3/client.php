<!DOCTYPE html>
<html>


<script>
function toggle_batch(source) {
  checkboxes = document.getElementsByName('check_list[]');
  //alert(checkboxes);
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
</script>

</script>


<img src="logo.PNG" style="margin-left:15%">
<h2><span style="color:red">CLIENT</span><span style="color:green">INFORMATION</span></h2>
<div style="float:right;">
<a href="admin/client.php?data=addclient">Client Register</a>

</div>
<?php include 'menu.php'?>
<div style="clear:both;"></div>
<?php include "db.php";?>
<?php

if(isset($_POST['submit']))
{
if(isset($_POST['check_list']))
{
include "birthday_Client.php";

}
else
echo "Please select student";
}
?>

<link rel="stylesheet" type="text/css" href="style.css">
<body>


<div class=CSSTableGenerator style="border-width: thick;background-color:coral;">
      <table border=1 rules=all>
        <thead  class=CSSTableGenerator>
		<form name="" action="" method=post>
<h2 class="filter-table" style="color:#104972">Search: 
<select name="column">
<option value="">select column</option>
<option value="name" <?php if(isset($_POST['column']) == "name"){ echo "selected"; }?>>Name</option>
<option value="email" <?php if(isset($_POST['column']) == "email"){ echo "selected"; }?>>Email</option>
<option value="dob" <?php if(isset($_POST['column']) == "dob"){ echo "selected"; }?>>DOB</option>
<option value="paidDate" <?php if(isset($_POST['column']) == "paidDate"){ echo "selected"; }?>>Paid Date</option>
<option value="due_ammount_follow_up_date" <?php if(isset($_POST['column']) == "due_ammount_follow_up_date"){ echo "selected"; }?>>Due Amount FollowUp Date</option>
</select>
<input placeholder="search any field" name="search" type="search" value="<?php echo isset($_POST['search']) ? $_POST['search'] : '';?>">
<input type="submit" name="searching" value="submit">
<input type="submit" name="reset" value="Reset"/></h2>
</form>	
            <tr>
                <th scope="col" style="width:2%">Check Uncheck<input name="check_list[]" type="checkbox" value="''" id="checkbox" onClick="toggle_batch(this)" /></th>
                <th scope="col">NAME</th>
                <th scope="col">EMAIL</th>
                <th scope="col" style="width:7%" >DOB</th>
                <th scope="col">GENDER</th>
                <th scope="col" style="width:7%">PHONE</th>              
              
                <th scope="col">FEE</th>
               
				<th scope="col">TAX AMOUNT</th>
                <th scope="col">TOTAL</th>
                <th scope="col" style="width: 7%;">PAID DATE</th>
                <th scope="col">DUE AMOUNT</th>
                <th scope="col">FOLLOW UP DATE</th>
				<th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody>
		<tr></tr>
		<?php 
		if(isset($_POST['searching'])){
			$sql = "SELECT * FROM `autoclient` WHERE $_POST[column] like '$_POST[search]%' union
select * from autoclient where $_POST[column] like '%$_POST[search]' union
select * from autoclient where $_POST[column] like '%$_POST[search]%'";
		}else{
		$sql="select * from autoclient";
		}
		$result=mysqli_query($link, $sql);
		while($row=mysqli_fetch_array($result))
		{

		
		echo "</td><td>";
		if(isset($_POST['check_list']))
		{
		if(in_array($row['id'],$_POST['check_list']))
		echo "<input type='checkbox' name='check_list[]' value='".$row['id']."' checked>";
		else		
		echo "<input type='checkbox' name='check_list[]' value='".$row['id']."'>";
		}
		else
		echo "<input type='checkbox' name='check_list[]' value='".$row['id']."'>";
		echo "</td><td style=font-size:15px>";
		echo $row['name'];
		echo "</td><td style=font-size:15px>";
		echo $row['email'];
		echo "</td><td style=font-size:15px>";
		echo $row['dob'];
			echo "</td><td style=font-size:15px>";
		echo $row['sex'];
			echo "</td><td style=font-size:15px>";
		echo $row['phone'];
		
			
			echo "</td><td style=font-size:15px>";
		echo $row['fee'];
			echo "</td><td style=font-size:15px>";
		
		echo $row['tax'];
			echo "</td><td style=font-size:15px>";
		
		echo $row['total'];
			echo "</td><td style=font-size:15px>";
		echo $row['paidDate'];
			echo "</td><td style=font-size:15px>";
		echo $row['dueAmount'];
			echo "</td><td style=font-size:15px>";
		echo $row['due_ammount_follow_up_date'];
		echo "</td><td style=font-size:15px>"; 
		echo "<a href='admin/client.php?data=editclient&page=".$row['id']."'>EDIT</a>"."&nbsp;&nbsp;"."<a href='#' class='btn btn-danger btn-setting' id=".$row['id'].">DELETE</a>";
		
		echo "</td>";
		echo "</tr>";
		}
		
		?>          
        </tbody>
    </table></div>
	
    <script src="script.js"></script>
    
	<br/>
	<form name="myform" action="" method=post>
	<h2><span style="color:red">CLIENT</span><span style="color:green">MAIL</span></h2>
	<input type="text" name="from" placeholder="Enter your own mail Id" required><br/>
	<input type="text" name="subject" placeholder="Enter Subject" required><br/>
	<textarea rows="10" cols="20" name="ss" style="margin-left: 2px;margin-right: 2px;width: 409px;" placeholder="PLEASE ENTER MESSAGE.......... " required></textarea><br/>
	<input type=submit name=submit value="Send Email">
	<!--<input type="button" name="Check_All" value="Check All"onClick="CheckAll(document.myform.check_list[])"> -->
	</form>
	
</body>
</html>
<div class="delete_pop" id="delete_pop">
	<div class="modal-header">
		
		<h3>Are Sure, Do you want to delete the Page?</h3>
	</div>
	<div class="modal-body">
		<a href="#?" class="btn btn-small btn-success yes">Yes</a>
		<button type="reset" class="btn btn-small delete_pop_close">No</a>
	</div>
			
</div>
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script>
			
			$(".btn-setting").click(function(){
				var page_id = $(this).attr("id");
				$(".yes").attr("href",'admin/dbfiles/clienttable.php?page_id='+page_id+"&table=autoclient");
				setTimeout(function(){ // then show popup, deley in .5 second
							loadPopup_delete(); // function show popup
				}, 500); // .5 second
				
			});
			
			$("#parent_checkbox").click(function(){
				
				if($(this).prop('checked')==true)
				{
					$(".child_checkbox").prop('checked',true);
					
				}
				else if($(this).prop('checked')==false)
				{
					$(".child_checkbox").prop('checked',false);
				}
				
			});
			
			function loadPopup_delete() {
				
				 // if value is 0, show popup
					closeloading(); // fadeout loading
					$('<div id="overlay_loading" />').css({
							position: 'fixed',
							top: 0,
							left: 0,
							width: '100%',
							height: '100%',
							backgroundColor: 'white',
				backgroundImage: 'url(img/ajax-loader.gif)',
				backgroundRepeat:'no-repeat',
				backgroundPosition:'center 165px',
							opacity: 0.8
			}).appendTo('body');
		
			$('#overlay_loading').fadeIn(1000, 0.9);	
							$("#delete_pop").fadeIn(0500);
						
					$('#overlay_loading').remove();
					 // fadein popup div
					$("#backgroundPopup").css("opacity", "0.7"); // css opacity, supports IE7, IE8
					$("#backgroundPopup").fadeIn(0001);
					popupStatus = 1; // and set value to 1
				
			}
			function closeloading() {
				$("div.loader").fadeOut('normal');
			}

			$(".delete_pop_close").click(function() {
				 // if value is 1, close popup
					$("#delete_pop").fadeOut("normal");
					$("#backgroundPopup").fadeOut("normal");
					popupStatus = 0;  // and set value to 0
				 // function close pop up
			});
			
			function loading() {
				$("div.loader").show();
			}
			
			
			function closeloading() {
				$("div.loader").fadeOut('normal');
			}
			
		</script>
<style>
	#delete_pop {
	font-family: "lucida grande",tahoma,verdana,arial,sans-serif;
    background: none repeat scroll 0 0 #FFFFFF;
    border: 6px solid #ccc;
    border-radius: px 3px 3px 3px;
    color: #333333;
    display: none;
	font-size: 14px;
    left: 65%;
    margin-left: -402px;
    position: fixed;
    top: 20%;
    width: 600px;
    z-index: 2;
}
.btn-success{background-color:#7bb33d;}

div.delete_pop_close {
    background: url("images/closebox.png") no-repeat scroll 0 0 transparent;
    bottom: 24px;
    cursor: pointer;
    float: right;
    height: 30px;
    left: 27px;
    position: relative;
    width: 30px;
}
span.ecs_tooltip {
    background: none repeat scroll 0 0 #000000;
    border-radius: 2px 2px 2px 2px;
    color: #FFFFFF;
    display: none;
    font-size: 11px;
    height: 16px;
    opacity: 0.7;
    padding: 4px 3px 2px 5px;
    position: absolute;
    right: -62px;
    text-align: center;
    top: -51px;
    width: 93px;
}
span.arrow {
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 7px solid #000000;
    display: block;
    height: 1px;
    left: 40px;
    position: relative;
    top: 3px;
    width: 1px;
}

div#popup_content {
    margin: 4px 7px;
	text-align:left;
}
div#popup_content a{
    padding:5px;
	background:#e6e6e6;
	color:orange !important;
	font-weight:bold;
}

		</style>