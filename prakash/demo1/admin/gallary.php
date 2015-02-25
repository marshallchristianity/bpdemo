<div id="content" class="span10">
	<!-- content starts -->
	<?php
		$get_pages = get_table_data('gallery',null);
		//echo "<pre>";print_r($get_pages);
	?>

	<div>
		<ul class="breadcrumb">
			<li>
				<a href="#">Home</a> <span class="divider">/</span>
			</li>
			<li>
				<a href="#">Gallary</a>
			</li>
			<li>
				
			</li>
		</ul>
	</div>
	<?php
					if($_GET['msg']=='delete')
					{
				?>
					<div class="alert alert-success">Gallary has been Deleted</div>
				<?php
					}
				?>

				<?php
					if($_GET['msg']=='success')
					{
				?>
					<div class="alert alert-success">Gallary has created successfully</div>
				<?php
					}
				?>
	<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Gallary</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form action="dbfiles/setbanner.php" method="post" style="width:100% !important">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								
								  <th>Gallary Image</th>
								  
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  
						  <tbody>
							<?php
								for($i=0;$i<count($get_pages);$i++){
									
							?>
							<tr>
								
								
								
								<td>
									<img src="../gallery/<?php echo $get_pages[$i]['image']?>" width="100" height="100">
								</td>
								<td class="center">
								
									
									<a class="btn btn-danger btn-setting" href="#" id="<?php echo $get_pages[$i]['id']?>">
										<i class="icon-trash icon-white"></i> 
										Delete
									</a>
								</td>
							</tr>
							<?php
								}
							?>
						  </tbody>
					  </table>            
					  </form>
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
<div class="delete_pop" id="delete_pop">
	<div class="modal-header">
		
		<h3>Are Sure, Do you want to delete the Gallary Image?</h3>
	</div>
	<div class="modal-body">
		<a href="#?" class="btn btn-small btn-success yes">Yes</a>
		<button type="reset" class="btn btn-small delete_pop_close">No</a>
	</div>
			
</div>		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script>
			
			
			$(".btn-setting").click(function(){
				var page_id = $(this).attr("id");
				$(".yes").attr("href",'dbfiles/gallarytable.php?gallary_id='+page_id+"&table=gallery");
				setTimeout(function(){ // then show popup, deley in .5 second
							loadPopup_delete(); // function show popup
				}, 500); // .5 second
				
			});function loadPopup_delete() {
				
				 // if value is 0, show popup
					closeloading(); // fadeout loading
					$('<div id="overlay_loading" />').css({
							position: 'fixed',
							top: 0,
							left: 0,
							width: '100%',
							height: '100%',
							backgroundColor: 'white',
				backgroundImage: 'url(img/ajax-loader.gif)',
				backgroundRepeat:'no-repeat',
				backgroundPosition:'center 165px',
							opacity: 0.8
			}).appendTo('body');
		
			$('#overlay_loading').fadeIn(1000, 0.9);	
							$("#delete_pop").fadeIn(0500);
						
					$('#overlay_loading').remove();
					 // fadein popup div
					$("#backgroundPopup").css("opacity", "0.7"); // css opacity, supports IE7, IE8
					$("#backgroundPopup").fadeIn(0001);
					popupStatus = 1; // and set value to 1
				
			}
			function closeloading() {
				$("div.loader").fadeOut('normal');
			}

			$(".delete_pop_close").click(function() {
				 // if value is 1, close popup
					$("#delete_pop").fadeOut("normal");
					$("#backgroundPopup").fadeOut("normal");
					popupStatus = 0;  // and set value to 0
				 // function close pop up
			});
			
			function loading() {
				$("div.loader").show();
			}
			
			
			function closeloading() {
				$("div.loader").fadeOut('normal');
			}
			
		</script>
<style>
	#delete_pop {
	font-family: "lucida grande",tahoma,verdana,arial,sans-serif;
    background: none repeat scroll 0 0 #FFFFFF;
    border: 6px solid #ccc;
    border-radius: px 3px 3px 3px;
    color: #333333;
    display: none;
	font-size: 14px;
    left: 65%;
    margin-left: -402px;
    position: fixed;
    top: 20%;
    width: 600px;
    z-index: 2;
}


div.delete_pop_close {
    background: url("images/closebox.png") no-repeat scroll 0 0 transparent;
    bottom: 24px;
    cursor: pointer;
    float: right;
    height: 30px;
    left: 27px;
    position: relative;
    width: 30px;
}
span.ecs_tooltip {
    background: none repeat scroll 0 0 #000000;
    border-radius: 2px 2px 2px 2px;
    color: #FFFFFF;
    display: none;
    font-size: 11px;
    height: 16px;
    opacity: 0.7;
    padding: 4px 3px 2px 5px;
    position: absolute;
    right: -62px;
    text-align: center;
    top: -51px;
    width: 93px;
}
span.arrow {
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 7px solid #000000;
    display: block;
    height: 1px;
    left: 40px;
    position: relative;
    top: 3px;
    width: 1px;
}

div#popup_content {
    margin: 4px 7px;
	text-align:left;
}
div#popup_content a{
    padding:5px;
	background:#e6e6e6;
	color:orange !important;
	font-weight:bold;
}

		</style>