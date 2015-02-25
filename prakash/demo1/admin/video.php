<div id="content" class="span10">
<?php $page = get_table_data('scanner_video',array('video_id'=>1)); ?>
			<!-- content starts -->
		<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Video Page Settings</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Video Page Settings</h2>
						<div class="box-icon">
							
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="dbfiles/videotable.php"  enctype="multipart/form-data">
						  <fieldset>
							<input type="hidden" value="<?php echo $page[0]['video_id'];?>" name="video_id">
							<input type="hidden" value="<?php echo $page[0]['video'];?>" name="video_name">
							<div class="control-group">
							  <label class="control-label" for="fileInput">Youtude Video url</label>
							  <div class="controls">
								<div class="controls">
								<input type="text" name="yvideo" id="file" value="<?php echo $page[0]['yvideo'];?>">								
							  </div>
							  </div>
							
							</div>          
							  OR
							<div class="control-group">

							  <label class="control-label" for="fileInput">Upload images</label>

							  <div class="controls">

								<input class="input-file uniform_on" id="fileInput" type="file" name="video"  >

								<?php

								if($page[0]['video']){

								?>

								<iframe src="../video/<?php echo $page[0]['video']; ?>" autoplay="false" controls="controls" style="height:150px"></iframe>

								<?php

								}

								?>

							  </div>

							</div> 
							<div class="form-actions">
							  <input type="submit" class="btn btn-primary" value="Save Changes">
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->


					<!-- content ends -->
			</div><!--/#content.span10-->
			