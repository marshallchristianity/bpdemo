
<?php
include "include/header.php";

 include"include/db.php"; ?>	
<div class="container" style="padding-bottom: 50px">
<div class="row">
<div class="span12">
<?php
$result=mysql_query("select * from pagescontent where id='".$_GET['id']."'");
while($row=mysql_fetch_array($result))
{
?>
<div> <img src ="images/<?php echo $row['image']; ?>" width=100% height=300></div>
<br/><br/>
        <h3 class="title"><?php 
		
		echo $row['pagetitle'];  ?></h3>
       <p>
	   <?php echo $row['pagecontent']; ?>
	   </p>
      <p style="font-weight: bold; font-size: 14px;">Our range services consist of:  </p>
      <p>Business Domains: </p>
      <div class="aserv-list col-sm-7">
			 <div class="col-left"> 
			 <?php
			 $i=1;
			 $result=mysql_query("select * from services");
             while($row=mysql_fetch_array($result))
			 {
			 ?>
				<!-- Service #1 -->
				<div class="aserv">
				   <!-- Font awesome icon -->
				   <div class="aserv-img">
					 <i><?php echo $i; ?>.</i>
				   </div>
				   <!-- Detail -->
				  <div class="aserv-details">
					 <?php echo $row['name']; $i++;?>
				   </div>
				   <div class="clearfix"></div>
				</div>
				
				
			   <?php
			   }
			   ?>
			 </div>
                                 
        </div>
		
		<?php 
		}
		?>

</div>

 <div class="formob"><img src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/main-banner.jpg" alt=""></div>
<!-- .fullscreen-container -->

<br />

<div class="recent-posts">
<div class="container">
<div class="row">
<div class="span12">


<div class="clearfix">&nbsp;</div>
</div>
</div>
</div>
</div>

<div class="clearfix">&nbsp;</div>

<div class="clearfix"></div>
<!--container close--></div>

<!--Jumbbo close-->


<!-- .jumbotron --><!-- Placed at the end of the document so the pages load faster --><script type="text/javascript" src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/jquery.easing.1.3.js"></script><script type="text/javascript" src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/bootstrap.min.js"></script><script type="text/javascript" src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/jqBootstrapValidation.js"></script><script type="text/javascript" src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/jquery.theme.plugins.min.js"></script><script type="text/javascript" src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/jquery.theme.revolution.min.js"></script><script type="text/javascript" src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/jquery.knob.js"></script><script type="text/javascript" src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/waypoints.min.js"></script><script type="text/javascript" src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/jquery.isotope.min.js"></script><script type="text/javascript" src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/jquery.isotope.perfectmasonry.js"></script><script type="text/javascript" src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/jquery.magnific-popup.min.js"></script><script type="text/javascript" src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/main.js"></script><script src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/jquery.carouFredSel-6.1.0-packed.js"></script><!-- Carousel for recent posts --><script src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/custom.js"></script><!-- Custom codes -->
    
    <!-- Contact Form Panel -->
 	<a href="http://www.worldindia.com/#" class="business"><div class="c-tab"></div>
		</a>
 
    </form>

<script type="text/javascript" src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/chatinline.aspx"></script><script src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/jsml.js"></script><script src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/resources.aspx"></script> 


</body></html>