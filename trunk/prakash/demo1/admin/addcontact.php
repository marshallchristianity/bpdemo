
<div id="content" class="span10">
			<!-- content starts -->
		<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Update page</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> update Page</h2>
						<div class="box-icon">
							
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="dbfiles/contacttable.php"  enctype="multipart/form-data">
						  <fieldset>
							<input type="hidden" value="<?php echo $page[0]['id']?>" name="page_id">
							<div class="control-group">
							 <label class="control-label" for="textarea2">address</label>
							   <div class="controls">								<textarea    name="address"><?php echo $page[0]['address']?></textarea>							  </div>
							   
							</div>							<div class="control-group">							  <label class="control-label" for="fileInput">Email Id</label>							  <div class="controls">								<input class="input-file uniform_on" id="fileInput" type="text" required name="email"  value="<?php echo $page[0]['email']?>">							  </div>							<p style="color:rgb(195, 193, 193);margin-left:150px;">have more than one email id? add with comma separated values</p>							</div>  							<div class="control-group">							  <label class="control-label" for="fileInput">phone No</label>							  <div class="controls">								<input class="input-file uniform_on" id="fileInput" type="text" required name="phone"  value="<?php echo $page[0]['phone']?>">							  </div>							<p style="color:rgb(195, 193, 193);margin-left:150px;">have more than one phone no? add with comma separated values</p>							</div> 
							
							<div class="form-actions">
							  <input type="submit" class="btn btn-primary" value="Update contact">
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->


					<!-- content ends -->
			</div><!--/#content.span10-->
			
	