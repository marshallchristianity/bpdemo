<?php
	include("../include/config.php");
	include("../include/functions.php");
	
	if(isset($_POST['page_id']) && $_POST['page_id']==''){
			$pr_id=array_shift($_POST);
			
			//$_POST['address']=$_POST['address'];
			
			//echo "<pre>";print_r($_POST); exit;
			db_insert('contact',$_POST);
			
			header('location:../index.php?data=contact&msg=success');
			
	}else{
			$product_id=array_shift($_POST);//echo "<pre>";print_r($_POST); exit;
			db_update('contact',$_POST,array('id'=>$product_id));
			
			header('location:../index.php?data=contact&msg=updated');
	}
	
?>