<div id="content" class="span10">
			<!-- content starts -->
		<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="client.php?data=autoclient">STUDENTS</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i>EXPORT SHINE DATA</h2>
						<div class="box-icon">
							
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="../export.php?table=shinedata"  enctype="multipart/form-data">
						  <fieldset>
							<input type="hidden" value="<?php echo $page['id']?>" name="id">
																					<div class="control-group">							  <label class="control-label" for="fileInput">export shine</label>							  <div class="controls">								<input class="input-file uniform_on"  type="file"  name="shine" value="">							  </div>							</div> 
                        
							<input type="hidden" name="student_type" value="shinedata">
							<div class="form-actions">
							  <input type="submit" class="btn btn-primary" value="export">
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
<script>    function fill() {        var txt8 = document.getElementById("TextBox8").value-0;        var txt9 = document.getElementById("TextBox9").value-0;		var tax=(txt8*12.36)/100;		var total=txt8+tax;		document.getElementById("TextBox11").value = tax;        document.getElementById("TextBox10").value = total;    }</script>

					<!-- content ends -->
			</div><!--/#content.span10-->
			
	