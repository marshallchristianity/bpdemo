<div id="content" class="span10">
			<!-- content starts -->
		<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Settings</a>
					</li>
				</ul>
			</div>
			<?php
					if($_GET['msg']=='updated')
					{
				?>
					<div class="alert alert-success">Settings updated successfully</div>
				<?php
					}
				?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Settings</h2>
						<div class="box-icon">
							
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="dbfiles/settingstable.php"  enctype="multipart/form-data">
						  <fieldset>
							
							
							<div class="control-group">
							  <label class="control-label" for="fileInput">Change Password</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="password" required name="password" >
							  </div>
							</div>        
							
							
							<div class="form-actions">
							  <input type="submit" class="btn btn-primary" value="Update Password">
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="dbfiles/settingstable.php"  enctype="multipart/form-data">
						  <fieldset>
							
							<input type="hidden" value="<?php echo $global[0]['global_id']?>" name="global_id">
							<div class="control-group">
							  <label class="control-label" for="fileInput">Contact Email</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="text" required name="contactemail" value="<?php echo $global[0]['contactemail']?>">
							  </div>
							</div>        
							<div class="control-group">
							  <label class="control-label" for="fileInput">Facebook Link</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="text"  name="fb_link" value="<?php echo $global[0]['fb_link']?>">
							  </div>
							</div> 
							<div class="control-group">
							  <label class="control-label" for="fileInput">Twitter Link</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="text"  name="twitter_link" value="<?php echo $global[0]['twitter_link']?>">
							  </div>
							</div> 
							<div class="control-group">
							  <label class="control-label" for="fileInput">LinkedIn Link</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="text"  name="linked_link" value="<?php echo $global[0]['linked_link']?>">
							  </div>
							</div> 
							<div class="control-group">
							  <label class="control-label" for="fileInput">Google+ Link</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="text"  name="youtube" value="<?php echo $global[0]['youtube']?>">
							  </div>
							</div> 
							<div class="form-actions">
							  <input type="submit" class="btn btn-primary" value="Update Settings">
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->


					<!-- content ends -->
			</div><!--/#content.span10-->
			