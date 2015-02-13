<?php
	include("../include/config.php");
	include("../include/functions.php");
	
	if($_GET['table']){
		mysqli_query($db_connect, "DELETE FROM `autocomplete` WHERE id='$_GET[page_id]'");
	
		header('location:../../student.php');
	}
	if(isset($_POST['id']) && $_POST['id']==''){	print_r($_POST); exit;			$body = htmlspecialchars(str_replace("'","",$_POST['body'])); 
			mysqli_query($db_connect,"INSERT INTO `bigperlt_bpearl`.`autocomplete` (`id`, `name`, `email`, `sex`, `dob`, `phone`, `course`,			`degree`, `maritial`, `address`, `fee`, `tax`, `tax_Amount`, `total`, `paidDate`, `dueAmount`, `due_ammount_follow_up_date`)			VALUES (NULL, '$_POST[name]', '$_POST[email]', '$_POST[sex]', '$_POST[dob]', '$_POST[phone]', '$_POST[course]',			'$_POST[degree]', '$_POST[maritial]', '$_POST[address]', '$_POST[fee]', '$_POST[tax]', '$_POST[tax_Amount]', '$_POST[total]',			'$_POST[paidDate]', '$_POST[dueAmount]', '$_POST[due_ammount_follow_up_date]');");
			
			header('location:../../student.php');
			
	}else{
		$product_id=$_POST['id'];
		$sel = mysqli_query($db_connect, "UPDATE `autocomplete` SET `name`='$_POST[name]',`email`='$_POST[email]',`sex`='$_POST[sex]',		`dob`='$_POST[dob]',`phone`='$_POST[phone]',`course`='$_POST[course]',`degree`='$_POST[degree]',		`maritial`='$_POST[maritial]',`address`='$_POST[address]',`fee`='$_POST[fee]',`tax`='$_POST[tax]',		`tax_Amount`='$_POST[tax_Amount]',`total`='$_POST[total]',`paidDate`='$_POST[paidDate]',`dueAmount`='$_POST[dueAmount]',		`due_ammount_follow_up_date`='$_POST[due_ammount_follow_up_date]' WHERE id = '$product_id'");
			
			//db_update('autocomplete',$_POST,array('id'=>$product_id));
			
			header('location:../../student.php');
	}
	
?>