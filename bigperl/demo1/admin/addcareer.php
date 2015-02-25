<div id="content" class="span10">
			<!-- content starts -->
		<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#"><?php echo(isset($_GET['page'])?'Edit':'Add')?> page</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> <?php echo(isset($_GET['page'])?'Edit':'Add')?> Page</h2>
						<div class="box-icon">
							
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="dbfiles/careertable.php"  enctype="multipart/form-data">
						  <fieldset>
							<input type="hidden" value="<?php echo $page['id']?>" name="id">		
							  	<div class="control-group">
							  <label class="control-label" for="fileInput">Position</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="text" required name="position"  value="<?php echo $page['position']?>">
							  </div>
							  </div>
							  
						          		
							 <div class="control-group">
							 <label class="control-label" for="textarea2">Job Description</label>
							  <div class="controls">
								<textarea  class="ckeditor" style="width: 600px !important; height: 100px !important;" name="detail" ><?php echo $page['detail']?></textarea>
							  </div>
							   
							</div>
							
							<div class="control-group">
							 <label class="control-label" for="textarea2">Pre-requisites</label>
							  <div class="controls">
								<textarea  class="ckeditor" style="width: 600px !important; height: 100px !important;" name="prerequisites" ><?php echo $page['prerequisites']?></textarea>
							  </div>
							   
							</div>
							
							
							<div class="form-actions">
							  <input type="submit" class="btn btn-primary" value="Update page">
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->


					<!-- content ends -->
			</div><!--/#content.span10-->
			
	