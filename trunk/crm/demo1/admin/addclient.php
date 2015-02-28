<div id="content" class="span10">
			<!-- content starts -->
		<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="client.php?data=autoclient">CLIENTS</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i>CLIENTS REGISTRATION</h2>
						<div class="box-icon">
							
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="dbfiles/clienttable.php"  enctype="multipart/form-data">
						  <fieldset>
							<input type="hidden" value="<?php echo $page['id']?>" name="id">
							<div class="control-group">
							  <label class="control-label" for="fileInput">name</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="text"  name="name" value="<?php echo $page['name']?>">
							  </div>
							</div>  							<div class="control-group">							  <label class="control-label" for="fileInput">email</label>							  <div class="controls">								<input class="input-file uniform_on" id="fileInput" type="text"  name="email" value="<?php echo $page['email']?>">							  </div>							</div>  							<div class="control-group">							  <label class="control-label" for="radio-button">Gender</label>							  <div class="controls">							  <select name="sex">								<option value="male">male</option>								<option value="female">female</option>							  </select>																  </div>							</div> 							<div class="control-group">							  <label class="control-label" for="fileInput">phone no</label>							  <div class="controls">								<input class="input-file uniform_on" id="fileInput" type="number"  name="phone" value="<?php echo $page['phone']?>">							  </div>							</div>  														<div class="control-group">							  <label class="control-label" for="fileInput">DOB</label>							  <div class="controls">								<input class="input-file uniform_on" id="fileInput" type="date"  name="dob" value="<?php echo $page['dob']?>">							  </div>							</div>  														<div class="control-group">							  <label class="control-label" for="fileInput">degree</label>							  <div class="controls">								<input class="input-file uniform_on" id="fileInput" type="text"  name="degree" value="<?php echo $page['degree']?>">							  </div>							</div> 							<div class="control-group">							  <label class="control-label" for="fileInput">maritial status</label> <div class="controls">							  <select name="maritial">								<option value="single">single</option>								<option value="married">married</option>							  </select></div>							</div>  
																					<div class="control-group">							  <label class="control-label" for="fileInput">address</label>							  <div class="controls">								<textarea class="input-file uniform_on"   name="address"><?php echo $page['address']?></textarea>							  </div>							</div> 
							<div class="control-group">							  <label class="control-label" for="fileInput">fee</label>							  <div class="controls">								<input class="input-file uniform_on"  onchange="fill()"  id="TextBox8" type="number"  name="fee" value="<?php echo $page['fee']?>">							  </div>							</div> 							<div class="control-group">							  <label class="control-label" for="fileInput">tax</label>							  <div class="controls">								<input class="input-file uniform_on" onchange="fill()"  id="TextBox9"   readonly type="text"  name="tax" value="12.36">							  </div>							</div> 							<div class="control-group">							  <label class="control-label" for="fileInput">tax amount</label>							  <div class="controls">								<input class="input-file uniform_on" id="TextBox11" type="text"  name="tax_Amount" value="<?php echo $page['tax_amount'];?>">							  </div>							</div> 							<div class="control-group">							  <label class="control-label" for="fileInput">Total</label>							  <div class="controls">							<input type="text" name="total" readonly value="<?php echo $page[0]['total'];?>" id="TextBox10">							</div>							</div>							<div class="control-group">							  <label class="control-label" for="fileInput">paid date</label>							  <div class="controls">								<input class="input-file uniform_on"  type="date"  name="paidDate" value="<?php echo $page['paidDate']?>">							  </div>							</div> 							<div class="control-group">							  <label class="control-label" for="fileInput">Due Amount</label>							  <div class="controls">								<input class="input-file uniform_on"  type="text"  name="dueAmount" value="<?php echo $page['dueAmount']?>">							  </div>							</div> 							<div class="control-group">							  <label class="control-label" for="fileInput">follow up date</label>							  <div class="controls">								<input class="input-file uniform_on"  type="date"  name="due_ammount_follow_up_date" value="<?php echo $page['due_ammount_follow_up_date']?>">							  </div>							</div> 
                        
							
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
			
	