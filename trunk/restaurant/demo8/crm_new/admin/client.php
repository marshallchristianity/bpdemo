<?php
	session_start();
	error_reporting(0);
	
	$username=$_SESSION['username'];
	 $uid=$_SESSION['adminid'];
	
	
	include("include/header.php");
	include("include/config.php");
	include("include/functions.php");
	
?>
<div class="container-fluid">
	<div class="row-fluid">
		<?php
			include("include/sidebar2.php");
		?>		
		<?php
		
			
			if($_GET['data']=='autoclient'){
				$pages = get_table_data('autoclient',null);
				include("autoclient.php");
			}if($_GET['data']=='editclient'){
			$pages = mysqli_query($db_connect, "select * from autoclient where id ='$_GET[page]'");
			$page = mysqli_fetch_array($pages);
				//$page = get_table_data('autoclient',array('id'=>$_GET['page']));
				include("addclient.php");
			}if($_GET['data']=='addclient'){
				include("addclient.php");
			}
			
		?>
	</div>
	<?php
		include("include/footer.php");
	?>
</div>
