<?php
	include("../include/config.php");
	include("../include/functions.php");
	
	if($_GET['table']){
		deleterow($_GET['table'],array('id'=>$_GET['page_id']));		header("location:../../workshop.php?id=4");		
	}
	if(isset($_POST['id']) && $_POST['id']==''){
			
			$_POST['created_date']=date("Y-m-d H:i:s");
			
			$_POST['updated_date']=date("Y-m-d H:i:s");
			
	
			db_insert('workshop',$_POST);
						header('location:../../workshop.php?id=4');			
	}else{		$product_id=array_shift($_POST);
		
		
			db_update('workshop',$_POST,array('id'=>$product_id));
			
					header('location:../../workshop.php?id=4');			
	}
	
?>