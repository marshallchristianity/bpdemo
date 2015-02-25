<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Prakash Engineers and Builders</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<?php include('includes/header.php'); ?>
    <section class="box" style="overflow:auto;">
	<?php $serv = mysqli_query($con, "select * from services"); 
		while($servi = mysqli_fetch_array($serv)){ ?>
		<h1><?php echo $servi['name']; ?></h1>
		<div class="msg_info section_w500">
					<?php $des = explode('.',htmlspecialchars_decode($servi['description']));
					echo $des[0]."<br/>".$des[1]; ?>
			
		</div>
		<div id="side_column" style="margin-top:-10px;border: 2px solid #fff;
box-shadow: 0px 0px 3px #000;">
        
        	<img src="images/<?php echo isset($servi['image']) ? $servi['image'] : ''; ?>" width="320px" height="150px">
        </div>
		<div style="clear:both;"></div>
		<?php }?>
    </section>

<?php include('includes/footer.php'); ?>