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
						<form class="form-horizontal" method="post" action="dbfiles/projecttable.php"  enctype="multipart/form-data">
						  <fieldset>
							<input type="hidden" value="<?php echo $page['id']?>" name="page_id">
							<input type="hidden" value="<?php echo $page['image']?>" name="page_image">
							<div class="control-group">
							  <label class="control-label" for="fileInput">Project Title</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="text" required name="name" 								value="<?php echo $page['name']?>">
							  </div>
							</div>          
							<div class="control-group">
							 <label class="control-label" for="textarea2">Project Description</label>
							  <div class="controls">
								<textarea  class="ckeditor" style="width: 600px !important; height: 100px !important;" name="description" ><?php echo $page['description']?></textarea>
							  </div>
							   
							</div>
							
                            <div class="control-group" style="background:#eeeeee;">
							  <label class="control-label" for="fileInput">Upload images</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file" name="image"  >
								<?php
								if($page['image']){
								?>
								<img src="../images/<?php echo $page['image']; ?>" style="height:150px">
								<?php
								}
								?>
							  </div>
							</div> 
						
                            
							<div class="form-actions">
							  <input type="submit" class="btn btn-primary" value="<?php echo(isset($_GET['page'])?'Update':'Add')?> page">
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->


					<!-- content ends -->
			</div><!--/#content.span10-->
			
	