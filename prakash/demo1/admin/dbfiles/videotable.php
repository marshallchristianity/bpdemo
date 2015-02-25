<?php
	include("../include/config.php");
	include("../include/functions.php");
	if(isset($_POST['video_id']) && $_POST['video_id']==''){
			$pr_id=array_shift($_POST);
			
			$_POST['created_date']=date("Y-m-d H:i:s");
			
			$_POST['updated_date']=date("Y-m-d H:i:s");
			if($_FILES['video']['name']){

				 $image_file=rand().$_FILES['video']['name'];

				$image_path='../../video/'.$image_file;

				$temp=$_FILES['video']['tmp_name'];

				copy($temp,$image_path);

				$_POST['video']=$image_file;

			}
			$yvideo = $_POST['yvideo'];			
			$sql="INSERT INTO scanner_video (yvideo,video, created_date, updated_date) VALUES ('$yvideo','$_POST[video]','$_POST[created_date]', '$_POST[updated_date]')";			
			if (!mysqli_query($db_connect,$sql)) {			  die('Error: ' . mysqli_error($db_connect));			}
			
			header('location:../index.php?data=video&msg=success');
			
	}else{
		//$product_id=array_shift($_POST);
		
		$_POST['updated_date']=date("Y-m-d H:i:s");		
		$video = $_POST['video_name'];
		$yvideo = $_POST['yvideo'];		
		if($_FILES['video']['name']){
					 $image_file=rand().$_FILES['video']['name'];
					$image_path='../../video/'.$image_file;
					$temp=$_FILES['video']['tmp_name'];
					copy($temp,$image_path);
					$_POST['video']=$image_file;
				}
				else{
					$_POST['video']=$video;
				}
				//echo $_POST['video']; exit;
		$sql="UPDATE scanner_video SET video = '$_POST[video]', yvideo='$yvideo', updated_date='$_POST[updated_date]' WHERE video_id='$_POST[video_id]'";
		if (!mysqli_query($db_connect,$sql)) {  die('Error: ' . mysqli_error($db_connect));}
		//db_update(DB_PREFIX.'video',$_POST,array('video_id'=>$product_id)); 
			
			header('location:../index.php?data=video&msg=updated');
	}
?>