<?php
	include("../include/db.php");
	include("../include/functions.php");
	
	if(isset($_GET['table'])){
		deleterow($_GET['table'],array('id'=>$_GET['page_id']));
	
		header("location:../index.php?data=pages&msg=delete");
	}
	if(isset($_POST['id']) && $_POST['id']==''){
			$product_id=array_shift($_POST);	
			$images=array_shift($_POST);
				if($_FILES['image']['name']){			
				$image_file=rand().$_FILES['image']['name'];	
				$image_path='../../images/'.$image_file;		
				$temp=$_FILES['image']['tmp_name'];				
				copy($temp,$image_path);				
				$_POST['image']=$image_file;			
				}				
				else{				
				$_POST['image']=$images;	
				}			
				//echo $_POST['image']; exit;
		    
		//	echo "insert into `pagescontent` `pagetitle`='".$_POST['pagetitle']."',`pagecontent`='".$_POST['pagecontent']."',`image`='".$_POST['image']."'"; exit;
			//mysql_query("insert into `pagescontent` `pagetitle`='$_POST[pagetitle]',`pagecontent`='$_POST[pagecontent]',`image`='$_POST[image]'");
	        db_insert('pagescontent',$_POST);
			header('location:../index.php?data=pages');
			
	}else{
			$product_id=array_shift($_POST);			$images=array_shift($_POST);
				if($_FILES['image']['name']){					 $image_file=rand().$_FILES['image']['name'];					$image_path='../../images/'.$image_file;					$temp=$_FILES['image']['tmp_name'];					copy($temp,$image_path);					$_POST['image']=$image_file;				}				else{					$_POST['image']=$images;				}				//echo $_POST['image']; exit;
		    
		//	echo "UPDATE `pagescontent` SET `pagetitle`='".$_POST['pagetitle']."',`pagecontent`='".$_POST['pagecontent']."',`image`='".$_POST['image']."' WHERE id = ".$product_id.""; exit;
			mysql_query("UPDATE `pagescontent` SET `parentpage`='".$_POST['parentpage']."',`pagesequence`='".$_POST['pagesequence']."',`pagetitle`='".$_POST['pagetitle']."',`pagecontent`='".$_POST['pagecontent']."',`image`='".$_POST['image']."' WHERE id = ".$product_id."");
	
			header('location:../index.php?data=pages');
	}
	
?>