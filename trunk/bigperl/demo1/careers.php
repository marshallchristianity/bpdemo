
<?php
include "include/header.php";

 include"include/db.php"; ?>	

<div class="container" style="padding-bottom: 50px">
<div class="recent-posts">
<div class="container">
<div class="row">
		<div class="col-sm-9">
		<h4 class="title" style="border-bottom:none !important;">Current Opening List</h4>
			<table cellspacing="0" class="table_s" border="0" id="DataList1" style="width:100%;border-collapse:collapse;">
				<tr>
					<th scope="col">Sr.No</th>
					<th scope="col">Position</th>
					<th scope="col">View Details</th>
				</tr>
				<?php
				$i=1;
				$result=mysql_query("select * from career");
				while($row=mysql_fetch_array($result))
				{
				?>
				<tr>
					<td  <?php  if(isset($_GET['JobID']) && $_GET['JobID']==$row['id']) {echo "style=background:orange"; }?>><span id="DataList1_ctl02_Label1"><?php echo $i; ?></span></td>
					<td  <?php  if(isset($_GET['JobID']) && $_GET['JobID']==$row['id']) {echo "style=background:orange"; }?>><?php echo $row['position'] ?></td>
					<td  <?php  if(isset($_GET['JobID']) && $_GET['JobID']==$row['id']) {echo "style=background:orange"; }?>><a id="DataList1_ctl02_HyperLink1" href="careers.php?JobID=<?php echo $row['id'] ?>">Details...</a></td>
				</tr>
					<?php if(isset($_GET['JobID']) && $_GET['JobID']==$row['id'])
					{
					?>
					<tr>
					<td style="background:white;" colspan=3>
						Job Detail:<br>
						<?php echo $row['detail']; ?>
						<br><br>
						Pre-requisites:<br>
						<?php echo $row['prerequisites']; ?>
						</td>
					</tr>
					<?php }?>	
				<?php
				$i++;
				}
				?>
				
	</table>

		</div>
		<div style="clear:both;padding-top:20px;"></div>
		<div class="col-sm-6">	   
			<div class="cwell">
				<!-- Contact form -->
				<h4 class="title" style="border-bottom:none !important;">Send Enquiry</h4>
				<div class="formy well">
				<form method="post" enctype="multipart/form-data" name="form1" id="form1" >
					<!-- Contact form (not working)-->
					<div class="form-horizontal">
						
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
								Subject</label>
							<div class="controls">
								<input name="subject" id="subject" class="input-medium" type="text" placeholder="" />
								<span id="RFV4" style="color:Red;visibility:hidden;">*</span>
								<span id="RegularExpressionValidator1" style="color:Red;visibility:hidden;">*</span>
							   
								</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="comment">
								Comment</label>
							<div class="controls">
								<textarea name="comment" rows="2" cols="20" id="comment" class="input-madium" placeholder=" Comments" type="text" style="height:92px;"></textarea>
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