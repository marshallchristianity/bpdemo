<?php
	session_start();
	error_reporting(0);
	
	$username=$_SESSION['username'];
	 $uid=$_SESSION['adminid'];
	if($_SESSION['adminid'] == ""){
		header('location:login.php');
	}
	include("include/header.php");
	include("include/db.php");
	include("include/functions.php");
	
?>
<div class="container-fluid">
	<div class="row-fluid">
		<?php
			include("include/sidebar.php");
		?>		
		<?php
			if($_GET['data']=='settings'){
				
				include("settings.php");
			}if($_GET['data']=='video'){
				$global = get_table_data('scanner_video',null);
				include("video.php");
			}
			if($_GET['data']=='projects'){
				$pages = get_table_data('services',null);
				include("projects.php");
			}if($_GET['data']=='editproject'){
				$pages = get_table_data('services',array('id'=>$_GET['page']));
				$page = $pages[0];
				include("addproject.php");
			}if($_GET['data']=='addproject'){
				include("addproject.php");
			}
			
			
			if($_GET['data']=='pages'){
				$pages = get_table_data('pagescontent',null);
				include("pages.php");
			}
			if($_GET['data']=='editpage'){
				$pages = get_table_data('pagescontent',array('id'=>$_GET['page']));
				$page = $pages[0];
				include("addpage.php");
			}if($_GET['data']=='addpage'){
				include("addpage.php");
			}
			
			if($_GET['data']=='career'){
				$pages = get_table_data('career',null);
				include("career.php");
			}
			if($_GET['data']=='editcareer'){
				$pages = get_table_data('career',array('id'=>$_GET['page']));
				$page = $pages[0];
				include("addcareer.php");
			}if($_GET['data']=='addcareer'){
				include("addcareer.php");
			}
			
			
			/*if($_GET['data']=='about'){
				$page = get_table_data('about',null);
				include("addpage.php");
			}*/if($_GET['data']=='contact'){
				$page = get_table_data('contact',null);
				include("addcontact.php");
			}
			
			if($_GET['data']=='gallary'){
			    $get_pages = get_table_data('gallery',null);

				include("gallary.php");
			}
			if($_GET['data']=='addgallary'){
				include("addgallary.php");
			}
			if($_GET['data']=='addimages'){
				include("addimages.php");
			}

		?>
	</div>
	<?php
		include("include/footer.php");
	?>
</div>
