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
							<input type="hidden" value="<?php echo $page['id']?>" name="id">							<input type="hidden" value="<?php echo $page['image']?>" name="page_image">
					
							  	<div class="control-group">
							  <label class="control-label" for="fileInput">Page Title</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="text" required name="pagetitle"  value="<?php echo $page['pagetitle']?>">
							  </div>
							  </div>
							  
							  <div class="control-group">
							  <label class="control-label" for="fileInput">Menu selection</label>
							  <div class="controls">
									<select name="parentpage">	
								<option value=0>Main menu</option>
								<?php
								$res=mysql_query("select * from pagescontent");
								while($r=mysql_fetch_array($res))
								{
								    if($page['parentpage'] == $r['id'])
						    		echo "<option value=".$r['id']." selected>".$r['pagetitle']."</option>";
									else
						    		echo "<option value=".$r['id']." >".$r['pagetitle']."</option>";
								}
								?>
								</select>
							</div>
							  </div>
							  <div class="control-group">
							  <label class="control-label" for="fileInput">Page sequence</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="text" required name="pagesequence"  value="<?php echo $page['pagesequence']?>">
							  </div>
							  </div>
						          		
							 <div class="control-group">
							 <label class="control-label" for="textarea2">Project Description</label>
							  <div class="controls">
								<textarea  class="ckeditor" style="width: 600px !important; height: 100px !important;" name="pagecontent" ><?php echo $page['pagecontent']?></textarea>
							  </div>
							   
							</div>
							<div class="control-group">							  <label class="control-label" for="fileInput">Upload images</label>							  <div class="controls">								<input class="input-file uniform_on" id="fileInput" type="file" name="image"  >								<?php								if($page['image']){								?>								<img src="../images/<?php echo $page['image']?>" style="height:150px">								<?php								}								?>							  </div>							</div> 
							
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
			
	