<?php
	include("../include/db.php");
	include("../include/functions.php");
	
	if(isset($_GET['table'])){
		deleterow($_GET['table'],array('id'=>$_GET['page_id']));
	
		header("location:../index.php?data=pages&msg=delete");
	}
	if(isset($_POST['id']) && $_POST['id']==''){
		  $product_id=array_shift($_POST);
		  print_r($_POST);
		   db_insert('career',$_POST);
			header('location:../index.php?data=career');
			
	}else{
			$product_id=array_shift($_POST);
			mysql_query("UPDATE `career` SET `position`='".$_POST['position']."',`detail`='".$_POST['detail']."',`prerequisites`='".$_POST['prerequisites']."' WHERE id = ".$product_id."");
	
			header('location:../index.php?data=career');
	}
	
?>