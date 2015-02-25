<?php
	include("../include/db.php");
	include("../include/functions.php");
	$_POST['created_date'] = date("Y-m-d H:i:s");
	$_POST['updated_date'] = date("Y-m-d H:i:s");
	if($_GET['table']){
		deleterow($_GET['table'],array('id'=>$_GET['gallary_id']));
		header("location:../index.php?data=gallary&msg=delete");
	}else{
		/*foreach($_FILES as $userfile)
		{
			 // store the file information to variables for easier access
			for($i=0;$i<count($userfile['name']);$i++)
			{
				$tmp_name = $userfile['tmp_name'][$i];
				$type = $userfile['type'];
				$name = $userfile['name'][$i];
				$size = $userfile['size'];
				$img=rand().$name;
				$imagespath="../gallery/".$img;
				copy($tmp_name,$imagespath);
				$_POST['image']=$img;				//print_r($_POST); exit;
			   db_insert('gallery',$_POST);
			}
		}*/
		
				if($_FILES['image']['name']){			
				$image_file=rand().$_FILES['image']['name'];	
				$image_path='../gallery/'.$image_file;		
				$temp=$_FILES['image']['tmp_name'];				
				copy($temp,$image_path); 				
			 	$_POST['image']=$image_file;			
				}		
				 db_insert('gallery',$_POST);
		
				
		
		header("location:../index.php?data=gallary&msg=success");
	}
?>