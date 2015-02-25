<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script><script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>						<style>.nicEdit-main {width:600px !important;}</style>
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
						<form class="form-horizontal" method="post" action="dbfiles/pagestable.php"  enctype="multipart/form-data">
						  <fieldset>
							<input type="hidden" value="<?php echo $page[0]['id']?>" name="page_id">							<input type="hidden" value="<?php echo $page[0]['image']?>" name="page_image">
							<div class="control-group">
							  <label class="control-label" for="fileInput">Page Title</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="text" required name="title" <?php echo isset($_GET['page']) ? "readonly" : ''; ?> value="<?php echo $page[0]['title']?>">
							  </div>
							</div>          						   
							<div class="control-group">
							 <label class="control-label" for="textarea2">Page Description</label>
							  <div class="controls"><textarea  id="textarea2" class="cleditor1" style="width: 600px !important; height: 100px !important;" name="description" ><?php echo $page[0]['description']?></textarea>							  </div>
							   
							</div>
							<div class="control-group">							  <label class="control-label" for="fileInput">Upload images</label>							  <div class="controls">								<input class="input-file uniform_on" id="fileInput" type="file" name="image"  >								<?php								if($page[0]['image']){								?>								<img src="../images/<?php echo $page[0]['image']?>" style="height:150px">								<?php								}								?>							  </div>							</div> 
							
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
			
	