<?php
	include("../include/config.php");
	include("../include/functions.php");
	
	if($_GET['table']){
		deleterow($_GET['table'],array('id'=>$_GET['id']));
		header("location:../index.php?data=projects&msg=delete");
	}
	if(isset($_POST['page_id']) && $_POST['page_id']==''){
			$pr_id=array_shift($_POST);
			$pr_img=array_shift($_POST);
			$_POST['name']=htmlspecialchars(str_replace("'","",$_POST['name']));
			
			
			$_POST['created_date']=date("Y-m-d H:i:s");
			$_POST['updated_date']=date("Y-m-d H:i:s");
			
			if($_FILES['image']['name']){
				 $image_file=rand().$_FILES['image']['name'];
				$image_path='../../images/'.$image_file;
				$temp=$_FILES['image']['tmp_name'];
				copy($temp,$image_path);
				$_POST['image']=$image_file;
			}			$pages = get_table_data('services',array('showon_homepage'=>1));
			if( count($pages) < 3){			$_POST['showon_homepage'] = 1;			}
			$_POST['description']=htmlspecialchars(str_replace("'","",$_POST['description']));			//print_r($_POST); exit;
			db_insert('services',$_POST);
			
			header('location:../index.php?data=projects&msg=success');
			
	}else{
		$product_id=array_shift($_POST);
			$images=array_shift($_POST);
		
			$_POST['name']=str_replace("'","",$_POST['name']);
		
				if($_FILES['image']['name']){					 $image_file=rand().$_FILES['image']['name'];					$image_path='../../images/'.$image_file;					$temp=$_FILES['image']['tmp_name'];					copy($temp,$image_path);					$_POST['image']=$image_file;				}				else{					$_POST['image']=$images;				}//echo $_POST['image']; exit;
						$_POST['updated_date']=date("Y-m-d H:i:s");
			
			$_POST['description']=htmlspecialchars(str_replace("'","",$_POST['description']));			//print_r($_POST); exit;			
			db_update('services',$_POST,array('id'=>$product_id));
			
			header('location:../index.php?data=projects&msg=updated');
	}
	
?>