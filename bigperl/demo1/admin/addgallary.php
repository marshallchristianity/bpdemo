<div id="content" class="span10">
			<!-- content starts -->
	
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Add Gallery</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Add Gallery</h2>
						<div class="box-icon">
							
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="dbfiles/gallarytable.php" enctype="multipart/form-data">
						  <fieldset>
							
							     
							<div class="control-group">
							  <label class="control-label" for="textarea2">Gallery</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file" required name="image" >
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="textarea2">Type</label>
							  <div class="controls">
								<select name="type">
									<option value=""> select gallery type</option>
									<?php $serv = get_table_data('pagescontent',null); 
									for($i=0;$i<count($serv);$i++){?>
									<option><?php echo $serv[$i]['pagetitle']; ?></option>
									<?php } ?>
								</select>
							  </div>
							</div>
							
							<div class="form-actions">
							  <input type="submit" class="btn btn-primary" value="Add Gallery">
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->


					<!-- content ends -->
			</div><!--/#content.span10-->
			