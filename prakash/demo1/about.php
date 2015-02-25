<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Prakash Engineers and Builders</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<?php include('includes/header.php'); ?>
    <section class="box" style="overflow:auto;">
	<?php $abouus = mysqli_query($con, "select * from about"); 
		$abt = mysqli_fetch_array($abouus); ?>
		<h1><?php echo $abt['title']; ?></h1>
	<div class="msg_info section_w500">
	        	<?php echo htmlspecialchars_decode($abt['description']); ?>
    	
	</div>
		<div id="side_column" style="margin-top:-10px;">
        
        	<img src="images/<?php echo isset($abt['image']) ? $abt['image'] : ''; ?>" width="320px">
        </div>
		
    </section>

<?php include('includes/footer.php'); ?>