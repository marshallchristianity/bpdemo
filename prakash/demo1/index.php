<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Prakash Engineers and Builders</title>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<style>
	.text{height:80px;overflow:hidden;margin-bottom:10px;}
	</style>
	<?php include("includes/header.php"); ?>
				<!-- end of header -->
				<div class="main">
					<!-- slider -->
				

				
				<div id="slider1">
					<!--<a class="buttons prev" href="#">&#8593;</a>-->
					<div class="viewport">
						<ul class="overview">
							<li>
								<img src="images/1.jpg" alt=""  />
								
							</li>
							<li>
								<img src="images/2.jpg" alt=""  />
								
							</li>
							<li>
								<img src="images/3.jpg" alt=""  />
								
							</li>
							<li><img src="images/4.jpg"></li>
						</ul>
					</div>
					<!--<a class="buttons next" href="#">&#8595;</a>-->
				</div>
			
					
					<!-- cols -->
					<section class="cols">
					<?php $services = mysqli_query($con, "select * from services where showon_homepage =1"); 
					$i =0;
					while($service = mysqli_fetch_array($services)){
					if($i == 2){?>
						<div class="col" style="margin-right:0px !important;">
					<?php }else{ ?>
						<div class="col">
					<?php } ?>
							<img src="images/<?php echo $service['image']; ?>">
							<h3><?php echo $service['name']; ?></h3>
							<div class="text"><?php echo htmlspecialchars_decode($service['description']); ?></div>
							<a href="services_details?id=<?php echo $service['id']; ?>" class="col-btn">Read More</a>
						</div>
					<?php $i++; } ?>
						

						
						<div class="cl">&nbsp;</div>
					</section>
					<!-- end of cols  -->

					<!-- box -->
					<section class="box">
						<span class="shadow-t"></span>
						<h3>Our Works</h3>

						<div class="jcarousel-wrapper">
							<div class="entries">
							<div class="jcarousel">	
								<ul>
								<?php $works = mysqli_query($con,"select * from gallery where type != 'certificates'");
								while($work = mysqli_fetch_array($works)){ ?>
									<li class="entry"><a href="gallery"><img src="gallery/<?php echo $work['image'];?>" alt="<?php echo isset($work['title']) ? $work['title'] : ''; ?>"></a></li>
								<?php } ?>
								  
								</ul>
							</div>
					
							<a href="#" class="jcarousel-control-prev">&lsaquo;</a>
							<a href="#" class="jcarousel-control-next">&rsaquo;</a>

							</div>
						</div>
				
					
				
					</section>
					
					<!-- services -->
	<?php include("includes/footer.php"); ?>			