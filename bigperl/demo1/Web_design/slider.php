
<!DOCTYPE html>
<html>
<?php include "../include/db.php"; ?>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <title>Amazing Slider</title>
    
    <!-- Insert to your webpage before the </head> -->
    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
    <script src="sliderengine/initslider-1.js"></script>
    <!-- End of head section HTML codes -->
    
</head>
<body>
    
    <!-- Insert to your webpage where you want to display the slider -->
    <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:900px;padding-left:0px; padding-right:250px;margin:0px auto 0px;">
        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
			<?php
			$count=0;
			$result=mysql_query("select image from gallery where type='Portfolio'");
			?>
            <ul class="amazingslider-slides" style="display:none;">
                <?php
				while($row=mysql_fetch_array($result))
			    {
				?>
				<li><img src="../admin/gallery/<?php echo $row['image'] ?>"  />
                </li>
				<?php
				}
				?>
            </ul>
            <ul class="amazingslider-thumbnails">
                <?php
				$result=mysql_query("select image from gallery where type='Portfolio'");
				while($row=mysql_fetch_array($result))
			    {
				?>
				<li><img src="../admin/gallery/<?php echo $row['image'] ?>" width=100 height=100 />
                </li>
				<?php
				}
				?>
			
            </ul>
        <div class="amazingslider-engine"><a href="http://amazingslider.com" title="Responsive jQuery Image Slider">Responsive jQuery Image Slider</a></div>
        </div>
    </div>
    <!-- End of body section HTML codes -->
    
</body>
</html>