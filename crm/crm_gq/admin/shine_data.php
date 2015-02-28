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
						<h2><i class="icon-edit"></i>SHINE DATA</h2>
						<div class="box-icon">
							
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="dbfiles/shinetable.php"  enctype="multipart/form-data">
						  <fieldset>
							<input type="hidden" value="<?php echo $page['id']?>" name="id">
							<div class="control-group">
							  <label class="control-label" for="fileInput">name</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="text"  name="name" value="<?php echo $page['name']?>">
							  </div>
							</div>  							<div class="control-group">							  <label class="control-label" for="radio-button">Gender</label>							  <div class="controls">							  <select name="gender" >								<option value="male">male</option>								<option value="female">female</option>							  </select>																  </div>							</div> 							<div class="control-group">							  <label class="control-label" for="fileInput">DOB</label>							  <div class="controls">								<input class="input-file uniform_on" id="fileInput" type="date"  name="dob" value="<?php echo $page['dob']?>">							  </div>							</div> 							<div class="control-group">							  <label class="control-label" for="fileInput">email</label>							  <div class="controls">								<input class="input-file uniform_on" id="fileInput" type="email"  name="email" value="<?php echo $page['email']?>">							  </div>							</div>  														<div class="control-group">							  <label class="control-label" for="fileInput">phone no</label>							  <div class="controls">								<input class="input-file uniform_on" id="fileInput" type="number"  name="contact" value="<?php echo $page['contact']?>">							  </div>							</div>  														 												
																					<div class="control-group">							  <label class="control-label" for="fileInput">Location</label>							  <div class="controls">								<textarea class="input-file uniform_on"   name="location"><?php echo $page['location']?></textarea>							  </div>							</div> 
							<div class="control-group">							  <label class="control-label" for="fileInput">Work Experiance</label>							  <div class="controls">								<input class="input-file uniform_on"   id="TextBox8" type="text"  name="work_exp" value="<?php echo $page['work_exp']?>">							  </div>							</div> 							<div class="control-group">							  <label class="control-label" for="fileInput">Current Industry</label>							  <div class="controls">								<input class="input-file uniform_on"  id="TextBox9"   type="text"  name="current_industry" value="<?php echo $page['current_industry'];?>">							  </div>							</div> 							<div class="control-group">							  <label class="control-label" for="fileInput">Current company</label>							  <div class="controls">								<input class="input-file uniform_on" id="TextBox11" type="text"  name="current_company" value="<?php echo $page['current_company'];?>">							  </div>							</div> 							<div class="control-group">							  <label class="control-label" for="fileInput">highest education level</label>							  <div class="controls">							<input type="text" name="highest_edu_level"  value="<?php echo $page[0]['highest_edu_level'];?>" id="TextBox10">							</div>							</div>							<div class="control-group">							  <label class="control-label" for="fileInput">highest education institute</label>							  <div class="controls">								<input class="input-file uniform_on"  type="text"  name="highest_edu_inst" value="<?php echo $page['highest_edu_inst']?>">							  </div>							</div> 														<div class="control-group">							  <label class="control-label" for="fileInput">Resume</label>							  <div class="controls">								<input class="input-file uniform_on"  type="file"  name="resume" value="">							  </div>							</div> 
                        
							<input type="hidden" name="student_type" value="shinedata">
							<div class="form-actions">
							  <input type="submit" class="btn btn-primary" value="<?php echo(isset($_GET['page'])?'Update':'Add')?> page">
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
			
	