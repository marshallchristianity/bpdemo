<?php
	include("../include/config.php");
	include("../include/functions.php");
	
	if($_GET['table']){
		deleterow($_GET['table'],array('page_id'=>$_GET['page_id']));
	
		header("location:../index.php?data=pages&msg=delete");
	}
	if(isset($_POST['page_id']) && $_POST['page_id']==''){
			$pr_id=array_shift($_POST);			$pr_img=array_shift($_POST);			
			$_POST['title']=htmlspecialchars(str_replace("'","",$_POST['title']));
			if($_FILES['image']['name']){				$image_file=rand().$_FILES['image']['name'];				$image_path='../../images/'.$image_file;				$temp=$_FILES['image']['tmp_name'];				copy($temp,$image_path);				$_POST['image']=$image_file;			}			
			$_POST['created_date']=date("Y-m-d H:i:s");
			$_POST['updated_date']=date("Y-m-d H:i:s");
	
			$_POST['description']=htmlspecialchars(str_replace("'","",$_POST['description']));
			
			//echo "<pre>";print_r($_POST); exit;
			db_insert('about',$_POST);
			
			header('location:../index.php?data=about&msg=success');
			
	}else{
			$product_id=array_shift($_POST);			$images=array_shift($_POST);
				if($_FILES['image']['name']){					 $image_file=rand().$_FILES['image']['name'];					$image_path='../../images/'.$image_file;					$temp=$_FILES['image']['tmp_name'];					copy($temp,$image_path);					$_POST['image']=$image_file;				}				else{					$_POST['image']=$images;				}				//echo $_POST['image']; exit;
		
			$_POST['title']=str_replace("'","",$_POST['title']);
			$_POST['description']=htmlspecialchars(str_replace("'","",$_POST['description']));
						mysqli_query($db_connect,"UPDATE `about` SET `title`='$_POST[title]',`description`='$_POST[description]',`image`='$_POST[image]' WHERE id = $product_id");
			//db_update('about',$_POST,array('id'=>$product_id));
			
			header('location:../index.php?data=about&msg=updated');
	}
	
?>