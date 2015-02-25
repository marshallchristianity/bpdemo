
   
<!--<div class="jumbotron fullscreenslider withoutslope">-->
<?php
include "include/header.php";

 include"include/db.php"; ?>

<div>
<div class="js">


</div>
		<div>
				<iframe align="center" style="margin:0px auto;" src="slider.html" width="100%"  height="534px" scrolling="no" border="0" frameborder="0" ></iframe>
		</div>
<!-- .fullscreenbanner --></div>

 
<!-- .fullscreen-container -->

<br />

<div class="recent-posts">
<div class="container">
<div class="row">
<div class="span12">
<div class="carousel_nav pull-right">
          <a class="prev" id="car_prev" href="javascript:void(0)" style="display: inline;"><i class="icon-chevron-left"></i>
          
          </a>
          <a class="next" id="car_next" href="javascript:void(0)" style="display: inline;"><i class="icon-chevron-right"></i></a>
        </div>

<h4 class="title">Our Work</h4>

<div class="clearfix">&nbsp;</div>

<div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 1168px; height: 228px; margin: 0px; overflow: hidden; cursor: move;"><ul class="rps-carousel" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 6424px; height: 228px;"><!-- Recent posts #1 -->
	<?php
	$count=0;
	$result=mysql_query("select image from gallery where type='Portfolio'");
	while($row=mysql_fetch_array($result))
	{
     if($count==4)
	 break;	
	?>
	<li style="width: 291px;">
	<div class="rp-item"><!-- Image. Don't forget the class "bwWrapper" -->
	<div class="rp-image"><a class="bwWrapper" target="_blank">
	<img src="admin/gallery/<?php echo $row['image'] ?>" alt=""></a></div>
	</div>
	</li>
	<?php
		$count++;
	}
	?>
	
	   
</ul></div>
<div class="clearfix">&nbsp;</div>
</div>
</div>
</div>
</div>

<div class="clearfix">&nbsp;</div>

<div class="clearfix"></div>
<div class="container" style="padding-bottom: 50px">
	<div class="row"><!-- services1 -->

<h3 class="mbt">Services</h3>
<table width=100%  cellspacing=20px cellpadding=20px style="border:1px;">

<?php
$i=0;
$result=mysql_query("select * from services");
	while($row=mysql_fetch_array($result))
	{
	if($i==0 || $i % 3 ==0)
	echo "</tr><tr><td width=33% >";
	else
	echo "<td width=33%>";
	
	// choosing circle color
	$color=array('seo','dev','design','email','web','ecom');
	if($i > 5)
	$j=0;
	else
	$j=$i;
?>
<div style="width:90%;">
<div>

<div class="img icon">
<a href=""><div class="circle <?php echo $color[$j]; ?>"><img alt="" src="images/<?php echo $row['image']; ?>"></div></a>
</div>
</div>

<div ><!-- Title and meta -->
<h5><a><?php echo $row['name'];?></a></h5>

<?php
 echo htmlspecialchars_decode(stripslashes($row['description']));
?>

</div>
</div>

<div class="clearfix">&nbsp;</div>
</div>
<?php
$i++;
	echo "</td>";
}
?>
</table>

</div>
<!--container close--></div>

<!--Jumbbo close-->
<br/>
<br/>
<br/>
<br/>
<br/>

<div class="row">
			<div class="client col-sm-11 ml45">
<div class="clogos">
<div class="carousel_nav2 pull-right" style="visibility:hidden;"><a href="http://www.worldindia.com/index.aspx#" id="left-arrow" class="" style="display: inline;"><img alt="" height="36" src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/next.png" width="19"></a></div>

<div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 1043px; height: 80px; margin: 0px; overflow: hidden; cursor: move;">

<ul class="clientlogo" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 7003px; height: 80px; z-index: auto;">
	
	
<li style="width: 149px;">
	<div class="rp-item"><a href="http://www.worldindia.com/our_clientele.html"><img alt="clientele" src="./tech_logo_images/1.jpg"></a></div>
	</li><li style="width: 149px;">
	<div class="rp-item"><a href="http://www.worldindia.com/our_clientele.html"><img alt="clientele" src="./tech_logo_images/2.jpg"></a></div>
	</li><li style="width: 149px;">
	<div class="rp-item"><a href="http://www.worldindia.com/our_clientele.html"><img alt="clientele" src="./tech_logo_images/3.jpg"></a></div>
	</li><li style="width: 149px;">
	<div class="rp-item"><a href="http://www.worldindia.com/our_clientele.html"><img alt="clientele" src="./tech_logo_images/4.jpg"></a></div>
	</li><li style="width: 149px;">
	<div class="rp-item"><a href="http://www.worldindia.com/our_clientele.html"><img alt="clientele" src="./tech_logo_images/5.jpg"></a></div>
	</li><li style="width: 149px;">
	<div class="rp-item"><a href="http://www.worldindia.com/our_clientele.html"><img alt="clientele" src="./tech_logo_images/6.jpg"></a></div>
	</li><li style="width: 149px;">
	<div class="rp-item"><a href="http://www.worldindia.com/our_clientele.html"><img alt="clientele" src="./tech_logo_images/7.jpg"></a></div>
	</li><li style="width: 149px;">
	<div class="rp-item"><a href="http://www.worldindia.com/our_clientele.html"><img alt="clientele" src="./tech_logo_images/8.jpg"></a></div>
	</li><li style="width: 149px;">
	<div class="rp-item"><a href="http://www.worldindia.com/our_clientele.html"><img alt="clientele" src="./tech_logo_images/9.jpg"></a></div>
	</li><li style="width: 149px;">
	<div class="rp-item"><a href="http://www.worldindia.com/our_clientele.html"><img alt="clientele" src="./tech_logo_images/10.jpg"></a></div>
	</li><li style="width: 149px;">
	<div class="rp-item"><a href="http://www.worldindia.com/our_clientele.html"><img alt="clientele" src="./tech_logo_images/11.jpg"></a></div>
	</li><li style="width: 149px;">
	<div class="rp-item"><a href="http://www.worldindia.com/our_clientele.html"><img alt="clientele" src="./tech_logo_images/12.jpg"></a></div>
	</li>
	<li style="width: 149px;">
	<div class="rp-item"><a href="http://www.worldindia.com/our_clientele.html"><img alt="clientele" src="./tech_logo_images/13.jpg"></a></div>
	</li>
	<li style="width: 149px;">
	<div class="rp-item"><a href="http://www.worldindia.com/our_clientele.html"><img alt="clientele" src="./tech_logo_images/14.jpg"></a></div>
	</li>
	<li style="width: 149px;">
	<div class="rp-item"><a href="http://www.worldindia.com/our_clientele.html"><img alt="clientele" src="./tech_logo_images/15.jpg"></a></div>
	</li>
	<li style="width: 149px;">
	<div class="rp-item"><a href="http://www.worldindia.com/our_clientele.html"><img alt="clientele" src="./tech_logo_images/16.jpg"></a></div>
	</li>
	</ul></div>

<div class="carousel_nav1 pull-left"><a href="http://www.worldindia.com/index.aspx#" id="right-arrow" class="" style="visibility:hidden;display: inline;"><img alt="" height="36" src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/pre.png" width="19"></a></div>
</div>

<div class="clearfix">&nbsp;</div>
</div>
          
            </div>
			
<footer class="jumbotron colorFooter" style="opacity: 1;background-color:rgba(248, 248, 248, 1);">	
		<div class="container">
        
			<div class="row">
				<div class="col-sm-3">
               <h5> <img style="margin-left:-60px" src="Web Design Company in India offering Web Site Hosting & Software Development Services._files/bigperl.png" width="268" height="52" alt="worldindia Logo"></h5>

					<p style="color:rgba(25, 70, 127, 0.89);"  >
					<b>BigPerl Solutions Pvt. Ltd. </b></p><br>
					</p>
                   
				</div>
                <div class="col-sm-1" style="width:160px;" >
<div>
<h5 style="color:rgba(25, 70, 127, 0.89);font-weight:bold;"  >Explore</h5>

<ul>
	<li style="color:black;padding:3px;;">» <a style="font-family:'Open Sans';color:rgba(25, 70, 127, 0.89);" href="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/Web Design Company in India offering Web Site Hosting & Software Development Services..html">Home</a></li>
	<li style="color:black;padding:3px;;">» <a style="font-family:'Open Sans';color:rgba(25, 70, 127, 0.89);" href="http://www.worldindia.com/whyus.html">Why Us</a></li>
	<li style="color:black;padding:3px;;">» <a style="font-family:'Open Sans';color:rgba(25, 70, 127, 0.89);" href="http://www.worldindia.com/clientele.aspx">Clientele</a></li>
	<li style="color:black;padding:3px;;">» <a style="font-family:'Open Sans';color:rgba(25, 70, 127, 0.89);" href="http://www.worldindia.com/portfolio.aspx">Portfolio</a></li>
	<li style="color:black;padding:3px;;">» <a style="font-family:'Open Sans';color:rgba(25, 70, 127, 0.89);" href="http://www.worldindia.com/pressrelease.html">Press Release</a></li>
	<li style="color:black;padding:3px;;">» <a style="font-family:'Open Sans';color:rgba(25, 70, 127, 0.89);" href="http://www.worldindia.com/articles.html">Latest Article</a></li>
    <li style="color:black;padding:3px;;">» <a style="font-family:'Open Sans';color:rgba(25, 70, 127, 0.89);"  href="http://www.worldindia.com/faqs.aspx">FAQ</a></li>
</ul>
</div>
</div>
				<div class="col-sm-2" style="width:210px;" >
<div>
<h5 style="color:rgba(25, 70, 127, 0.89);font-weight:bold;"  >Services</h5>

<ul>
	<li style="color:black;padding:3px;;">» <a style="font-family:'Open Sans';color:rgba(25, 70, 127, 0.89);" href="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/Web Design Company in India offering Web Site Hosting & Software Development Services..html">Web Design</a></li>
	<li style="color:black;padding:3px;;">» <a style="font-family:'Open Sans';color:rgba(25, 70, 127, 0.89);" href="http://www.worldindia.com/whyus.html">Web Development</a></li>
	<li style="color:black;padding:3px;;">» <a style="font-family:'Open Sans';color:rgba(25, 70, 127, 0.89);" href="http://www.worldindia.com/clientele.aspx">Mobile Apps</a></li>
	<li style="color:black;padding:3px;;">» <a style="font-family:'Open Sans';color:rgba(25, 70, 127, 0.89);" href="http://www.worldindia.com/portfolio.aspx">Software Development</a></li>
	<li style="color:black;padding:3px;;">» <a style="font-family:'Open Sans';color:rgba(25, 70, 127, 0.89);" href="http://www.worldindia.com/pressrelease.html">SEO/Social Media</a></li>
	<li style="color:black;padding:3px;;">» <a style="font-family:'Open Sans';color:rgba(25, 70, 127, 0.89);" href="http://www.worldindia.com/articles.html">Maintenance</a></li>
    
</ul>
</div>
</div>

<div class="col-sm-3" style="width:210px;" >
<div>
<h5 style="color:rgba(25, 70, 127, 0.89);font-weight:bold;"  >News Room</h5>

<ul>
	<li style="color:black;padding:3px;;">» <a style="font-family:'Open Sans';color:rgba(25, 70, 127, 0.89);" href="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/Web Design Company in India offering Web Site Hosting & Software Development Services..html">Photo Gallery</a></li>
	<li style="color:black;padding:3px;;">» <a style="font-family:'Open Sans';color:rgba(25, 70, 127, 0.89);" href="http://www.worldindia.com/whyus.html">Video Gallery</a></li>
	<li style="color:black;padding:3px;;">» <a style="font-family:'Open Sans';color:rgba(25, 70, 127, 0.89);" href="http://www.worldindia.com/clientele.aspx">Press Release</a></li>
	
    
</ul>
</div>
</div>
				
				
			</div><!-- .row -->
		</div><!-- .container -->
		<div class="reverseBox">
<div class="container">

<p class="pull-left view9">Best view in Mozilla, Crome, Internet Explorer 9 &amp; above.</p> <p class="pull-left"><a href="http://www.worldindia.com/referral.aspx" class="ml80">Referral Programm</a> |  <a href="http://www.worldindia.com/newpopup1.html">Special Offers</a> | <a href="http://www.worldindia.com/sitemap.aspx">Sitemap</a> |  <a href="http://www.worldindia.com/terms.html">Terms &amp; Conditions</a> |  <a href="http://www.worldindia.com/Service-agreement.pdf" target="_blank">Service Agreement</a> |  <a href="http://www.worldindia.com/terms_for_in_domain_registrars.pdf" target="_blank">T &amp; C for .In domain </a></p>
          </div>
		</div>
	</footer>

<!-- .jumbotron --><!-- Placed at the end of the document so the pages load faster --><script type="text/javascript" src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/jquery.easing.1.3.js"></script><script type="text/javascript" src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/bootstrap.min.js"></script><script type="text/javascript" src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/jqBootstrapValidation.js"></script><script type="text/javascript" src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/jquery.theme.plugins.min.js"></script><script type="text/javascript" src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/jquery.theme.revolution.min.js"></script><script type="text/javascript" src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/jquery.knob.js"></script><script type="text/javascript" src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/waypoints.min.js"></script><script type="text/javascript" src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/jquery.isotope.min.js"></script><script type="text/javascript" src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/jquery.isotope.perfectmasonry.js"></script><script type="text/javascript" src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/jquery.magnific-popup.min.js"></script><script type="text/javascript" src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/main.js"></script><script src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/jquery.carouFredSel-6.1.0-packed.js"></script><!-- Carousel for recent posts --><script src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/custom.js"></script><!-- Custom codes -->
    
    <!-- Contact Form Panel -->
 	<a href="http://www.worldindia.com/#" class="business"><div class="c-tab"></div>
		</a>
 
    </form>

<script type="text/javascript" src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/chatinline.aspx"></script><script src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/jsml.js"></script><script src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/resources.aspx"></script> 


</body></html>