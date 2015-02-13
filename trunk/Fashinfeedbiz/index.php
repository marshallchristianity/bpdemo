
<?php
include("includes/header.php");

?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
$(function(){
	$('.pix_diapo').diapo();
});

$(document).ready(function(){
$(".service").click(function(){
var id = $(this).attr("id");
});
var url = $(location).attr('href');
var hash = url.substring(url.indexOf('#')); 
$("#"+id).click(function(){
$('html, body').animate({
    scrollTop: $(hash).offset().top
}, 2000);
});
});

</script>

<!-- Intro -->
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>

<div id="intro">
	<!--<div style="overflow:none ; width:960px; height:375px; margin-top:0px; margin-left:auto; margin-right:auto; padding:0 20px;"> 

         </div> -->      
               <!--........ For slide .......!!! -->    
                  	
                   <tr>
<center><table border=0 width=65%><tr><td align=center><?php  include "slider/demo1.html"; ?></td></tr></table></center>
</tr>
               
                
        
    
    </div>
<!-- /Intro -->

<!-- Main -->

<div id="main">
  <div class="shell">
    
		<!-- Box -->
		
		<div class="box">
		    <h1 style="color:#29a045;margin-bottom:20px;" align="left">About Fashin Feed Biz</h1>
			
			<p style="text-align:justify;"><strong>Fashin Feed Biz Group</strong> is a young and  enterprising organisation offering  innovative solutions & services  to its customers.</p>
<p style="text-align:justify;">We provide  biz solutions  on  -  <strong>i. Information Systems & Technology</strong>   <strong>ii. Marketing of Products & Services</strong>   <strong>iii. Backend Support  Services & Solutions</strong></p> 
			<a href="aboutus.php" class="readmore">See More&nbsp;&raquo;</a>
			<br/>
			
		
			
		</div>
		<!-- /Box -->
		<!-- Box -->
		
		<div class="box">
			<h1 style="color:#29a045;margin-bottom:20px;margin-left:40px;">Services</h1>
			
			<div class="entry">
				<!-- News -->	
				<div class="news">
				<ul style="margin-left:40px;">
					<li><a href="aboutus.php#1" id="service2" class="service" style="color:blue;">Technology Solutions</a></li>
					<li><a href="aboutus.php#4" id="service1" class="service" style="color:blue;">Marketing Solutions</a></li>
					<li><a href="aboutus.php#3" id="service3" class="service" style="color:blue;">Backend Support Services </a></li>
					<li><a href="aboutus.php#2" id="service3" class="service" style="color:blue;">Business Process Solutions </a></li>
					
					
				</ul>
					
				</div>
				<!-- /News -->
			</div>
			
		</div>
		<!-- /Box -->
		<!-- Box -->
		
	     <td>
		 &nbsp&nbsp&nbsp
		 </td>
		
		 <ul class="careerslinks"><h1 style="color:#29a045;margin-bottom:20px;" align="left">Contact Us</h1>
            <ol>
			<li>Feedbiz Solutions India Pvt. Ltd., Bangalore, India</li>
			<li>Alfashin Management Services Pvt. Ltd., Chennai, India </li>
			<li>Fashin Technologies FZE, UAE</li>
			</ol>

		</div>
		
		<!-- /Box -->
		
		<div class="cl">&nbsp;</div> 
        
        <table>
<tr>
&nbsp&nbsp&nbsp&nbsp
</tr>
</table>

<!-- /Main -->

<!-- Footer -->

<?php

include('includes/footer.php');
?>