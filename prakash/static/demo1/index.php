<?php
include("includes/header.php");

?>
<link rel='stylesheet' id='style-css'  href='diapo.css' type='text/css' media='all'> 
<script type='text/javascript' src='Scripts/jquery.min.js'></script>
<!--[if !IE]><!--><script type='text/javascript' src='Scripts/jquery.mobile-1.0rc2.customized.min.js'></script><!--<![endif]-->
<script type='text/javascript' src='Scripts/jquery.easing.1.3.js'></script> 
<script type='text/javascript' src='Scripts/jquery.hoverIntent.minified.js'></script> 
<script type='text/javascript' src='Scripts/diapo.js'></script> 
<link href="StyleSheet3.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="http://sirmvinstitute.com/jq/jcarousel.responsive.css">

<script type="text/javascript" src="http://sirmvinstitute.com/jq/libs/jquery/jquery.js"></script>
<script type="text/javascript" src="http://sirmvinstitute.com/jq/dist/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="http://sirmvinstitute.com/jq/dist/jquery.jcarousel-autoscroll.min.js"></script>
<script type="text/javascript" src="http://sirmvinstitute.com/jq/jcarousel.responsive.js"></script>
<script>
$(function(){
	$('.pix_diapo').diapo();
});

</script>
<style>
.widget{-webkit-box-shadow: 0 1px 3px rgba(34,25,25,0.4);
background-color: #fff;
border: 1px solid #ddd;
border-radius: 4px;
width: 280px;
padding: 10px;

}
.text-center {
text-align: center;}
.span3{width:280px; float:left;margin-right:25px;}
.span3 img{width:270px; height:150px;}
.last{margin-right:0px !important;}
.jcarousel li{width:260px !important; height:150px !important;}
	  .jcarousel li img{width:260px !important; height:150px !important;}
</style>
<!-- Intro -->
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<div class="main_container" style="background-color:#c6eaf8;">
<div id="intro">
                  	
<tr>
<center><table border=0 width=65%><tr><td align=center><?php  include "slider/demo1.html"; ?></td></tr></table></center>
</tr>
               
                
        
    
    </div>
<!-- /Intro -->

<!-- Main -->

<div id="main">
  <div class="shell">
		<div class="span3 text-center widget">
		<img src="images/rain_water.jpg" alt="">
          <br/><h2 class="widget-title">Rain Water Harvesting</h2>
         <div style="height:90px;overflow:hidden">
			Rainwater harvesting is the accumulation and deposition of rainwater for reuse before it reaches the aquifer. Uses include water for garden, water for livestock, water for irrigation, and indoor heating for houses etc. 		 
		</div> 
          <a href="" class="more">Read More</a>
		  </div>
			<div class="span3 text-center widget">
		<img src="images/planning.jpg" alt=""><br/>
          <h2 class="widget-title">Sanction & Working Plans</h2>
         <div style="height:90px;overflow:hidden">
			The pre-conditions for an application for building sanction plan :
Person/persons having right of erection on a plot of land, or who is the owner of a plot of land having deed of conveyance and mutation certificate and has no dues towards property.	 		 </div> 
          <a href="" class="more">Read More</a>
		  </div>
		  <div class="span3 text-center last widget">
		<img src="images/images.jpg" alt=""><br/>
          <h2 class="widget-title">Universal scanner</h2>
         <div style="height:90px;overflow:hidden">
			content hoes here.	 </div> 
          <a href="" class="more">Read More</a>
		  </div>
		<div class="cl" style="padding-bottom:20px;">&nbsp;</div> 
		<h3 style="border-bottom:1px dotted black;">OUR WORKS</h3>
        <div class="jcarousel-wrapper">
                <div class="jcarousel">
						
                    <ul>
				
                        
                        <li><a href="gallery"><img src="images/75.jpg" alt="Image 2"></a></li>
                       <li><a href="gallery"><img src="images/73.jpg" alt="Image 2"></a></li>
						<li><a href="gallery"><img src="images/76.jpg" alt="Image 2"></a></li>
						<li><a href="gallery"><img src="images/77.jpg" alt="Image 2"></a></li>
						<li><a href="gallery"><img src="images/71.jpg" alt="Image 2"></a></li>
                    </ul>
                </div>

                <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                <a href="#" class="jcarousel-control-next">&rsaquo;</a>

                <p class="jcarousel-pagination"></p>
            </div>
		<h3 style="border-bottom:1px dotted black;">CERTIFICATES</h3>
        <div class="jcarousel-wrapper">
                <div class="jcarousel">
						
                    <ul>
				
                        
                        <li><a href="gallery"><img src="images/c1.jpg" alt="Image 2"></a></li>
                       <li><a href="gallery"><img src="images/c2.jpg" alt="Image 2"></a></li>
						<li><a href="gallery"><img src="images/c3.jpg" alt="Image 2"></a></li>
						
                    </ul>
                </div>

                <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                <a href="#" class="jcarousel-control-next">&rsaquo;</a>

                <p class="jcarousel-pagination"></p>
            </div>
	</div>
</div>
</div>
<script>
$('.jcarousel')
    .jcarousel({
        // Core configuration goes here
    })
    .jcarouselAutoscroll({
        interval: 5000,
        target: '+=1',
        autostart: true
    });

</script>
<!-- /Main -->

<!-- Footer -->

<?php

include('includes/footer.php');
?>