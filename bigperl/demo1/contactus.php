<?php
include "include/header.php";
include "include/db.php";
?>
   
<!--<div class="jumbotron fullscreenslider withoutslope">-->

<div>
<div class="js">


</div>
<br/>
	
		<div class="container" style="padding-bottom: 50px">


<div class="recent-posts">
<div class="container">
<div class="row">
		<div class="col-sm-8">	   
			<div class="cwell">
				<!-- Contact form -->
				<h4 class="title">Send Enquiry</h4>
				<div class="formy well">
				<form method="post" enctype="multipart/form-data" name="form1" id="form1" >
					<!-- Contact form (not working)-->
					<div class="form-horizontal">
						<!-- How do you know us? -->
						<div class="control-group">
							<label class="control-label" for="comment">
								How do you know us?</label>
							<div class="controls">
								<select id="cat" name="cat" class="normaltextbox" >
									 <option value="" label="">Select One</option>
									<option value="Corporate" label="Corporate">Corporate</option>
									<option value="Individual" label="Individual">Individual</option>
								</select>
							</div>
						</div>
						<!-- Name -->
						<div class="control-group">
							<label class="control-label" for="name">
								Name</label>
							<div class="controls">
								<input name="name" id="name" class="input-medium" type="text" placeholder="Name" />
								<span id="RFV1" style="color:Red;visibility:hidden;">*</span>
								</div>
						</div>
						<!-- Email -->
						<div class="control-group">
							<label class="control-label" for="email">
								Email</label>
							<div class="controls">
								<input name="email" id="email" class="input-medium" type="text" placeholder="example@gmail.com" />
								<span id="RFV3" style="color:Red;visibility:hidden;">*</span>
								<span id="RegularExpressionValidator1" style="color:Red;visibility:hidden;">*</span>
							   
								</div>
						</div>
						<!-- Phone -->
						<div class="control-group">
							<label class="control-label" for="phone">
								Phone</label>
							<div class="controls">
								<input name="phone" id="phone" class="input-medium" type="text" placeholder="+xx xx xxxx xxxx" />
								<span id="RFV4" style="color:Red;visibility:hidden;">*</span>
								<span id="RegularExpressionValidator1" style="color:Red;visibility:hidden;">*</span>
							   
								</div>
						</div>
						<!-- How do you know us? -->
						<div class="control-group">
							<label class="control-label" for="comment">
								How do you know us?</label>
							<div class="controls">
								 <select id="findit" name="findit" class="normaltextbox" >
									<option value="" selected="selected" label="">Select One</option>
									<option value="Web Search" >Web Search</option>
									<option value="Print Media" >Print Media</option>
									<option value="Reference" >Reference</option>
									<option value="Others" >Others</option>
								</select>
							</div>
						</div>
						<!-- Comment 
						<div class="control-group">
							<label class="control-label" for="comment">
								Comment</label>
							<div class="controls">
								<textarea name="txtComments" rows="2" cols="20" id="txtComments" class="input-madium" placeholder=" Comments" type="text" style="height:92px;"></textarea>
							</div>
						</div> -->
						<!-- capatch --->
						<div class="control-group">
							<label class="control-label" for="comment">
								Type the Text
							</label>
							<div class="controls">
								<iframe src="captcha.php" class="captcha2" align="left" name="ifcap" id="ifcap" scrolling="no"></iframe>
								
								<input name="6_letters_code" type="text" id="6_letters_code" class="input-medium" placeholder=" Type the Text" style="margin-top:-100px;"/>
								<br />
								
								<span id="lblCaptchamsg" class="pagetext" style="color:Red;"></span>
							</div>
							
						</div>
						<!-- Buttons -->
						<div class="form-actions cen">
							<!-- Buttons -->
							
							<input type="submit" name="imgBtnSubmit" value="Submit"  id="imgBtnSubmit" onclick="return validateform();" class="btn button normal dark reverted" type="submit" />
							<div id="ValidationSummary1" style="color:Red;display:none;"></div>
							<input type="submit" name="btnreset" value="Reset" id="btnreset" class="btn button normal dark reverted" type="reset" />
						</div>
					</div>
				</form>
				</div>
			</div>
			<div class="gmap">
				<!-- Google Maps. Replace the below iframe with your Google Maps embed code -->
				<iframe width="450" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.co.in/maps?near=Hoysala+Circle+Bus+Stop+%4012.923821,77.484925&amp;geocode=&amp;q=Titan+Showroom&amp;f=l&amp;hl=en&amp;dq=bigpearl+loc:+RAYSITI+Animations,+Old+Outer+Ring+Road,+Gnanabharathi,+Stage+II,+Kengeri+Satellite+Town,+Bangalore,+Karnataka+560060&amp;sll=12.925361,77.485606&amp;sspn=0.006295,0.006295&amp;ie=UTF8&amp;hq=Titan+Showroom&amp;hnear=&amp;ll=12.925361,77.485606&amp;spn=0.050947,0.084543&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=4581672443215855221&amp;output=embed"></iframe><br /><small><a href="https://www.google.co.in/maps?near=Hoysala+Circle+Bus+Stop+%4012.923821,77.484925&amp;geocode=&amp;q=Titan+Showroom&amp;f=l&amp;hl=en&amp;dq=bigpearl+loc:+RAYSITI+Animations,+Old+Outer+Ring+Road,+Gnanabharathi,+Stage+II,+Kengeri+Satellite+Town,+Bangalore,+Karnataka+560060&amp;sll=12.925361,77.485606&amp;sspn=0.006295,0.006295&amp;ie=UTF8&amp;hq=Titan+Showroom&amp;hnear=&amp;ll=12.925361,77.485606&amp;spn=0.050947,0.084543&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=4581672443215855221&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>
	
				
			</div>
		</div>
		<div class="col-sm-4">
			<div class="cwell">
				
				<h2 class="title">
					Contact Us:</h2>
				<div class="address">
					<?php
						$result=mysql_query("select * from pagescontent where id='".$_GET['id']."'");
						while($row=mysql_fetch_array($result))
						{
							echo $row['pagecontent'];
						}
					?>
				</div>
			</div>
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
 	<a href="" class="business"><div class="c-tab"></div>
		</a>
 
    </form>

<script type="text/javascript" src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/chatinline.aspx"></script><script src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/jsml.js"></script><script src="./Web Design Company in India offering Web Site Hosting & Software Development Services._files/resources.aspx"></script> 


</body></html>