<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);
</script>
<script src="js/jquery.js"></script>					
<style>
.nicEdit-main {width:600px !important;}
</style>
<div id="content" class="span10">

			<!-- content starts -->

		<div>

				<ul class="breadcrumb">

					<li>

						<a href="#">Home</a> <span class="divider">/</span>

					</li>

					<li>

						<a href="?data=pages">pages</a>

					</li>

				</ul>

			</div>

			

			<div class="row-fluid sortable">

				<div class="box span12">

					<div class="box-header well" data-original-title>

						<h2><i class="icon-edit"></i> Slider images</h2>

						<div class="box-icon">

							

						</div>

					</div>

					<div class="box-content">

						<form name="f2" action="#" method="post" enctype="multipart/form-data">
						<table width="250">
							<tr>
								<td>Uplaod slider images</td>
								<td></td>
							</tr>
							<tr>
								<td><input type="file" name="image_name" id="facility_name" required></td>
								<td><input type="submit" name="add_new" id="add_new" value="upload"></td>
							</tr>
						</table>
						</form> 


						<?php
						include("include/config.php");
						$result1 = mysqli_query($db_connect,"select * from page_images where page_id = $_GET[page]");
						
						
						if(isset($_POST['add_new'])){
							if($_FILES['image_name']['name']){

							 $image_file=rand().$_FILES['image_name']['name'];

							$image_path='../img/'.$image_file;

							$temp=$_FILES['image_name']['tmp_name'];

							copy($temp,$image_path);

							$_POST['image']=$image_file;

							}else{
							$_POST['image']='';
							}
							$sql = mysqli_query($db_connect,"INSERT INTO `page_images`(`page_id`, `image`) VALUES ('$_GET[page]','$_POST[image]')");
							
						}
						
						?>
					</div>
				   <div class="contete_area">
			
            
                   
                           
                            	
		<div class="content flights">
		
       
        <div class="wi680_search_branc" style="width:900px; margin-top:10px">
		
		<h4>Photo Gallery</h4>
		 <?php
        if (!empty($result1)) {
		
        while($result = mysqli_fetch_array($result1)) {  ?>
        <div class="image-box" style="float:left;" id="pic1"><div>
        
        <img src="../img/<?php echo $result['image']; ?>" width="165" height="120" border="0" style="margin:4px;  " />
       
        <div class="checkbox-bg" style="width:165px; height:auto;"> 
     
        <span class="img-fix"><a href="dbfiles/imagetable.php?page=<?php echo $_GET['page']; ?>&id=<?php echo $result['image_id']; ?>" ><img src="" width="14" height="14" border="0" style="margin-left:5px; position:relative; top:-115px; z-index:999;cursor:pointer;" onclick="return confirm('Are you sure you want to delete?')" /></a></span> 
       
	  
        </div>
		  </div>
        
        </div>
        
       
       
        <?php }} ?>
      
		
			</div>

				</div><!--/span-->



			</div><!--/row-->
				</div><!--/span-->

				

			</div><!--/row-->





					<!-- content ends -->

			</div><!--/#content.span10-->

			

	