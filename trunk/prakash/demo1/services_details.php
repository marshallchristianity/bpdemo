<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Prakash Engineers and Builders</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<style>
#slider1{
float: left !important;
}
.sidebar{
float:left;
width:200px;
height:100%;
background:#f67f21;
margin-right:20px;
margin-top:30px;
}
.sidebar ul{list-style:none;}
.sidebar ul li{padding:10px;}
.sidebar ul li a{color:#ffffff;font-weight:bold;text-decoration:none;}
.sidebar ul li:hover{background:#f5951a;}
.content{
float:left;
width:650px;
}
.content img{width:650px;height:235px;}
</style>
<?php include('includes/header.php'); ?>
    <section class="box" style="overflow:auto;">
		<div class="sidebar">
			<ul>
			<?php $serv = mysqli_query($con, "select * from services"); 
			while($servi = mysqli_fetch_array($serv)){			?>
				<li><a href="services_details?id=<?php echo $servi['id']; ?>"><?php echo $servi['name']; ?></a></li>
			<?php } ?>
			</ul>
		</div>
		<div class="content">
			<?php if(isset($_GET['id'])){ 
			$id = $_GET['id'];
			$serv1 = mysqli_query($con, "select * from services where id=$id");
			$servi1 = mysqli_fetch_array($serv1);
			$service_id = $servi1['id']; 
			?>
			<h1 style="color:black;"><?php echo $servi1['name']; ?></h1>
			<div style="clear:both;padding-top:10px;"></div>
			<div class="img">
				<?php if($service_id == 4){ 
				$videos = mysqli_query($con, "select * from scanner_video");
				$video = mysqli_fetch_array($videos);

				if($video['yvideo'] != '') { $vid = $video['yvideo']; ?>
				<iframe height="300px" width="670px" src="<?php echo $vid; ?>"></iframe>

				<?php  }else{ $vid = "video/".$video['video'] ; 

				?>

				<video width="670px" height="300px" style="float:left;margin-right:20px;" controls="controls" type="video/mp4" preload="none">
				<source src="<?php echo $vid; ?>" autostart="false">
				Your browser does not support the video tag.
				</video>
				<?php } }else{ ?>
				<div id="slider1">
					<?php $images = mysqli_query($con,"select * from service_images where service_id = $service_id"); ?>
					<div class="viewport">
						<ul class="overview">
						<?php while($image = mysqli_fetch_array($images)){ ?>
							<li>
								<img src="gallery/<?php echo $image['images']; ?>" alt="" />
								
							</li>
						<?php } ?>
						</ul>
					</div>
					<!--<a class="buttons next" href="#">&#8595;</a>-->
				</div>
				<?php } ?>
			</div>
			<div style="clear:both;padding-top:10px;"></div>
			<div class="desc">
		
			<?php echo htmlspecialchars_decode($servi1['description']); ?></div>
			<?php }else{
			$serv1 = mysqli_query($con, "select * from services limit 1");
			$servi1 = mysqli_fetch_array($serv1);
			?>
			<h1 style="color:black;"><?php echo $servi1['name']; ?></h1>
			<div style="clear:both;padding-top:10px;"></div>
			<div class="img"><img src="images/<?php echo $servi1['image']; ?>"></div>
			<div style="clear:both;padding-top:10px;"></div>
			<div class="desc"><?php echo htmlspecialchars_decode($servi1['description']); ?></div>
			<?php }?>
		</div>
    </section>

<?php include('includes/footer.php'); ?>