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
			include("include/sidebar.php");
		?>		
		<?php
		
			if($_GET['data']=='autocomplete'){
				$pages = get_table_data('autocomplete',null);
				include("autocomplete.php");
			}if($_GET['data']=='editauto'){
				$pages = mysqli_query($db_connect, "select * from autocomplete where id ='$_GET[page]'");
				$page = mysqli_fetch_array($pages);
				include("addauto.php");
			}if($_GET['data']=='addauto'){
				include("addauto.php");
			}
			if($_GET['data']=='shine_data'){
				include("shine_data.php");
			}if($_GET['data']=='editshine'){
				$pages = mysqli_query($db_connect, "select * from shinedata where id ='$_GET[page]'");
				$page = mysqli_fetch_array($pages);
				include("shine_data.php");
			}if($_GET['data']=='workshop'){
				$pages = get_table_data('workshop',null);
				include("workshop.php");
			}if($_GET['data']=='editworkshop'){
				$pages = mysqli_query($db_connect, "select * from workshop where id ='$_GET[page]'");
				$page = mysqli_fetch_array($pages);
				include("workshop.php");
			}
			if($_GET['data']=='export_shine'){
				include("export_shine.php");
			}
			
		?>
	</div>
	<?php
		include("include/footer.php");
	?>
</div>
