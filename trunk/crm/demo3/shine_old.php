<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="style.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="cleditor-master/jquery.cleditor.css" />
    <script type="text/javascript" src="cleditor-master/jquery.cleditor.js"></script>
	
	<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);
</script>
						
<style>
.nicEdit-main {width:600px !important;}
</style><script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);
</script>
						
<style>
.nicEdit-main {width:600px !important;}
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
<script>
 $(document).ready(function() {
            $(".textarea").cleditor({
                width: 500, // width not including margins, borders or padding
                height: 250, // height not including margins, borders or padding
                controls: // controls to add to the toolbar
                    "bold italic underline strikethrough subscript superscript | font size " +
                    "style | color highlight removeformat | bullets numbering | outdent " +
                    "indent | alignleft center alignright justify | undo redo | " +
                    "rule image link unlink | cut copy paste pastetext | print source",
                colors: // colors in the color popup
                    "FFF FCC FC9 FF9 FFC 9F9 9FF CFF CCF FCF " +
                    "CCC F66 F96 FF6 FF3 6F9 3FF 6FF 99F F9F " +
                    "BBB F00 F90 FC6 FF0 3F3 6CC 3CF 66C C6C " +
                    "999 C00 F60 FC3 FC0 3C0 0CC 36F 63F C3C " +
                    "666 900 C60 C93 990 090 399 33F 60C 939 " +
                    "333 600 930 963 660 060 366 009 339 636 " +
                    "000 300 630 633 330 030 033 006 309 303",
                fonts: // font names in the font popup
                    "Arial,Arial Black,Comic Sans MS,Courier New,Narrow,Garamond," +
                    "Georgia,Impact,Sans Serif,Serif,Tahoma,Trebuchet MS,Verdana",
                sizes: // sizes in the font size popup
                    "1,2,3,4,5,6,7",
                styles: // styles in the style popup
                    [["Paragraph", "<p>"], ["Header 1", "<h1>"], ["Header 2", "<h2>"],
                    ["Header 3", "<h3>"],  ["Header 4","<h4>"],  ["Header 5","<h5>"],
                    ["Header 6","<h6>"]],
                useCSS: false, // use CSS to style HTML when possible (not supported in ie)
                docType: // Document type contained within the editor
                    '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">',
                docCSSFile: // CSS file used to style the document contained within the editor
                    "",
                bodyStyle: // style to assign to document body contained within the editor
                    "margin:4px; font:10pt Arial,Verdana; cursor:text"
            });
        });
function toggle_batch(source) {
  checkboxes = document.getElementsByName('check_list[]');
  //alert(checkboxes);
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
</script>
</head>
<body>
<img src="logo.PNG" style="margin-left:15%"><br/>
<h2 style="font-family:Britannic Bold"><span style="color:red">SHINE</span><span style="color:green">INFORMATION</span></h2>
<div style="float:right;">
<a href="admin/student.php?data=shine_data">Shine Register</a>

</div>
<div style="clear:both;"></div>
<div>
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
<?php include 'menu.php' ?>
<div style="clear:both;"></div>
<?php include "db.php";?>
<?php
if(isset($_POST['submit']))
{
if(isset($_POST['check_list']))
{
include ("mail/test.php");
}
else{
echo "Please select student";
}
}
?>


<div class=CSSTableGenerator style="border-width: thick;background-color: darkseagreen;">

      <table border=1 rules=all>
        <thead  class=CSSTableGenerator>
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
<form name="" action="" method=post>	
            <tr>
		 
              <!--  <th scope="col">ID</th> -->
                 <th scope="col">Check
				 <input name="check_list[]" type="checkbox" value="''" id="checkbox" onClick="toggle_batch(this)" /></th>
                <th scope="col">NAME</th>
				<th scope="col" style="width:8%">DOB</th>
                <th scope="col">EMAIL</th>
                <th scope="col">PHONE</th>
                <th scope="col">CURRENT LOCATION</th>
                <th scope="col">TOTAL WORK EXPERIENCE</th>
				<th scope="col">CURRENT INDUSTRY</th>
				<th scope="col">CURRENT COMPANY</th>
				<th scope="col">HIGHEST EDUCATION LEVEL</th>
                <th scope="col">HIGHEST EDUCATION INSTITUTE</th>
				<th scope="col">RESUME</th>
				<th scope="col">OPTION</th>
				
          
            </tr>
        </thead>
        <tbody>
		<tr></tr>
		<?php 
		if(isset($_POST['searching'])){
			include_once('function.php');
			$page = (int)(!isset($_GET["page"]) ? 1 : $_GET["page"]);
			if ($page <= 0) $page = 1;

			$per_page = 10; // Set how many records do you want to display per page.

			$startpoint = ($page * $per_page) - $per_page;
			$statement ="`shinedata` ORDER BY `id` DESC";;
			$sql = "SELECT * FROM `shinedata` where $_POST[column] like '$_POST[search]%' union
select * from shinedata where $_POST[column] like '%$_POST[search]' union
select * from shinedata where $_POST[column] like '%$_POST[search]%' ORDER BY `id` DESC LIMIT {$startpoint} , {$per_page}";

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
		$sql="select * from shinedata";
		}
		$result=mysqli_query($link, $sql);
		while($row= mysqli_fetch_array($result))
		{
		echo "</tr><tr>";
		//echo $row['id'];
		echo "<td>";
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
		echo $row['dob'];
		echo "</td><td style=font-size:15px>";
		echo $row['email'];
			echo "</td><td style=font-size:15px>";
		echo $row['contact'];
			echo "</td><td style=font-size:15px>";
		echo $row['location'];
			echo "</td><td style=font-size:15px>";
		echo $row['work_exp'];
			echo "</td><td style=font-size:15px>";
		echo $row['current_industry'];
		
		
			echo "</td><td style=font-size:15px>";
		echo $row['current_company'];
			
			echo "</td><td style=font-size:15px>";
			
		echo $row['highest_edu_level'];
			echo "</td><td style=font-size:15px>";
		
		echo $row['highest_edu_inst'];
			echo "</td><td style=font-size:15px>";
		echo $row['resume'];
			echo "</td><td style=font-size:15px>";
		
		
		echo "<a href='admin/student.php?data=editshine&page=".$row['id']."'>EDIT</a>"."&nbsp;&nbsp;"."<a href='#' class='btn btn-danger btn-setting' id=".$row['id'].">DELETE</a>";
		echo "</td>";
		echo "</tr>";
		
		}
		echo pagination($statement,$per_page,$page);
		?>          
        </tbody>
    </table></div>
	
    
	<br>
	<?php $templates = mysqli_query($link, "select * from mail_tamplates");
//			 $row= mysqli_fetch_array($templates); 
			 ?>
	<h2 style="font-family:Britannic Bold"><span style="color:red">SHINE</span><span style="color:green">MAIL</span></h2>

	<input type="text" name="subject" value="<?php echo $row['subject']; ?> ">
	 <textarea class="cleditor1" rows="3" name="post_description" style="width: 600px !important; height: 100px !important;"><?php echo $row['body']; ?></textarea>

  
	<input type="submit" name="submit" value="Send Email">
	
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
		<script>
			
			$(".btn-setting").click(function(){
			
				var page_id = $(this).attr("id");
				$(".yes").attr("href",'admin/dbfiles/shinetable.php?page_id='+page_id+"&table=shinedata&type=shinedata");
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
			$("#file_upload").click(function(){
			alert("hi"); return false;
				$('#import').change(
					function () {
						var fileExtension = ['csv'];
						if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
							
							$('#error').html("Only '.csv' formats are allowed.");
							return false;
						}
						else {
							
							$('#error').html(" ");
						} 
					})  
			})  
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