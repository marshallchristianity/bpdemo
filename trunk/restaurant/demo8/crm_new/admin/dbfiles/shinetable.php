<?php
	include("../include/config.php");
	include("../include/functions.php");
	
	if($_GET['table']){
		deleterow($_GET['table'],array('id'=>$_GET['page_id']));
		
		header("location:../../shine.php?id=3");		
	}
	if(isset($_POST['id']) && $_POST['id']==''){
			
			$_POST['created_date']=date("Y-m-d H:i:s");
			
			$_POST['updated_date']=date("Y-m-d H:i:s");
			
			if($_FILES['resume']['name']){
				 $image_file=rand().$_FILES['resume']['name'];
				$image_path='../../documents/'.$image_file;
				$temp=$_FILES['resume']['tmp_name'];
				copy($temp,$image_path);
				$_POST['resume']=$image_file;
			}else{			$_POST['resume']='';			}			
			db_insert('shinedata',$_POST);
			
			header('location:../../shine.php?id=3');
			
	}else{		$product_id=array_shift($_POST);
		
				if($_FILES['resume']['name']){
					 $image_file=rand().$_FILES['resume']['name'];
					$image_path='../../documents/'.$image_file;
					$temp=$_FILES['resume']['tmp_name'];
					copy($temp,$image_path);
					$_POST['resume']=$image_file;
				}
			db_update('shinedata',$_POST,array('id'=>$product_id));
			
						header('location:../../shine.php?id=3');
	}
	
?>