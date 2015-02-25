<?php
	session_start();
	include("../include/config.php");
	include("../include/functions.php");
	
		if(isset($_POST['password'])){
			$_POST['original_pwd']=$_POST['password'];
			$_POST['password']=md5($_POST['password']);
			$_POST['updated_date']=date("Y-m-d H:i:s");
			//print_r($_SESSION['adminid']); exit;
			db_update('adminuser',$_POST,array('admin_id'=>$_SESSION['adminid']));
		}
		else{
			if(isset($_POST['global_id']) && $_POST['global_id']==''){
				$global_id=array_shift($_POST);
				$_POST['updated_date']=date("Y-m-d H:i:s");
				$_POST['created_date']=date("Y-m-d H:i:s");
				db_insert('globalsettings',$_POST);
				
			}else{
				$global_id=array_shift($_POST);
				$_POST['updated_date']=date("Y-m-d H:i:s");
				db_update('globalsettings',$_POST,array('global_id'=>$global_id));
			}
		}
			header('location:../index.php?data=settings&msg=updated');
	
?>
