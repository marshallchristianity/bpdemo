<!DOCTYPE html>
<html lang="en">

		<head>
			<meta charset="utf-8" />
			
				<link type="text/css" rel="stylesheet" href="home.css">
				<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
				
				
				 
     <style type="text/css">

  

	</style>

     <script type = "text/javascript">
		
		var menu_name="",x=0;
		
		
		function show_popup()
		{
		
			document.getElementById("city_popup").style.visibility="visible"
		
		}
		
		function highlight(menu_name,x)
		{
			if(x==0)
			{
				document.getElementById(''+menu_name).style.borderColor="black";
			
			}else
				{
					document.getElementById(''+menu_name).style.borderColor="#01a54f";
					
				}
			
		
		
		
		}
	  	
		
		
     </script>

			
			
							
			
		</head>
		
		
		
		<body  bgcolor="white"  style="margin:0px auto;" >
		
		
				<div style="width:1024px;margin:0px auto;paddding:0px auto;" >
				
				<div id="city_popup" style="border: 3px solid #f7f7f7;width:500px;height:400px;background-color:white;position:absolute;left:500px;top:184px;visibility:hidden;" >
					<a href="#" ><img src="close.png" style="float:right;" onclick="document.getElementById('city_popup').style.visibility='hidden'" ></a>
					 <ul align="center" style="padding:0px;">
								 
								
								
								<li style="list-style-type: none;" >
									  <select id="city_name">
									  <option >Select City</option>
									  <option value="bangalore">Bangalore</option>
									  <option value="hyderabad">Hyderabad</option>
									  <option value="chennai">Chennai</option>
									  <option value="delhi">Delhi</option>
									  </select>
								</li>
					</ul>				
			
				</div>
					<div style="float:right;" >
							<a href="#"><img src="dropdown.PNG" style="float:right;margin-top: 9px;margin-left: -10px;width: 23px;" onclick="show_popup()" ></a>
							<a href="#" style="text-decoration:none;" ><p style="float:right;color:white;padding: 5px;margin: 0px;padding-right: 10px;"  onclick="show_popup()"><b>Bangalore </b></p></a>
							
					</div>
					
						<div id="top_menu" >
						
							<div id="logo">
								<img src="logo.png" >
							</div >
							
							<div id="menus" >	
								<ul class="menu">
									<li ><a href="">HOME</a></li>
									<li ><a href="">GET STARTED</a></li>
									<li id="last_menu"  ><a href="" >CONTACT US</a></li>					
								</ul>
							</div>	
							
							
							
							
							
						</div >	
						
						
						
						
						
						<div  >
							<div id="state_menu_div"   >
							  
							 <ul align="center" >
								 
								
															
								<li >
									  <select id="area_name" style="width:400px;" >
									  <option >Select Area</option>
									  <option value="bangalore">Vijaynagar</option>
									  <option value="hyderabad">Jaynagar</option>
									  <option value="chennai">Kengeri</option>
									  <option value="delhi">Rajajinagar</option>
									  </select>
								</li>
								
								 
								
							 </ul>
							 
							
							</div>
							
							
						
						</div>
						
					<div>	
						<div id="check_box_menus" style="box-shadow: 10px 10px 5px #888888;"  >
							<p style="font-size:19px;font-family:arial;" >Cuisine Type</p>
								<ul id="check_box_menus_ui" >
									<li class="check_box_menus_ui_li"><input type="checkbox"  name="food_type" value="Chinese cuisine"> Chinese cuisine</li>									
									<li class="check_box_menus_ui_li"><input type="checkbox"  name="food_type" value="European cuisine"> European cuisine</li>	
									<li class="check_box_menus_ui_li"><input type="checkbox"  name="food_type" value="Italian cuisine"> Italian cuisine</li>	
									<li class="check_box_menus_ui_li"><input type="checkbox"  name="food_type" value="Italian cuisine"> Thai cuisine</li>	
								</ul>
							<img src="pixel.JPG" width="100%" height="3" >	
							
							<p style="font-size:19px;font-family:arial;" >Facilities</p>
								<ul id="check_box_menus_ui" >
									<li class="check_box_menus_ui_li"><input type="checkbox"  name="food_type" value="Chinese cuisine"> Home Delivery</li>									
									<li class="check_box_menus_ui_li"><input type="checkbox"  name="food_type" value="European cuisine"> Online Payment</li>	
									<li class="check_box_menus_ui_li"><input type="checkbox"  name="food_type" value="Italian cuisine"> Smoking</li>	
									<li class="check_box_menus_ui_li"><input type="checkbox"  name="food_type" value="Italian cuisine"> Liquor</li>	
								</ul>
							<img src="pixel.JPG" width="100%" height="3" >	
							
							
						</div>
						
					</div>	
						
					<div style="margin-left: 220px;margin-top:40px; " >
								
								<div style="padding:10px;width:780px;height:210px;border: 1px solid #000000;box-shadow: 10px 10px 5px #888888" id="menu_1" onmouseover="highlight('menu_1',1)" onmouseout="highlight('menu_1',0)" >
								
									<div style="margin:-10px;padding:0px;height:230px;float:left;border: 1px solid #000000;border-top:0px;border-left:0px;border-bottom:0px;">
										<div  style="padding:15px;">
											<img id= "search_results_div_image" src="1.jpg" width="130">
												<br>											
											<img  src="vegnnon.jpg" width="40">										
											
										</div>									
									</div>
									
									<div  style="width:490px;height:230px;margin-left:10px;margin-top:-10px	;float:left;border:1px solid #000000;border-top:0px;border-left:0px;border-bottom:0px;" >
										<div style="border:1px solid #000000;border-top:0px;border-right:0px;border-left:0px;height:45px;">
											<img  src="menu.jpg"  class="menu_icon" >	
											<img  src="gallery_icon.jpg" class="menu_icon" >				
											<img  src="reviews.JPG" class="menu_icon" >
											<img  src="contact_us.jpg" class="menu_icon" >
										</div>	
										
										<div style="border:0px solid #000000;height:128px;">
											<div style="float:left;">
												<p style="padding-top:10px;width:130px;color:grey;font-size:13px;" align="center" >#23/2, Vittal Mallya Road, Bangalore - 560001</p>
												<p style="width:130px;color:grey;font-size:13px;" align="center">[Monday-Saturday]</p>
												<p style="width:130px;color:grey;font-size:13px;" align="center">9.30AM - 6.00PM</p>
											</div>	
											
											<div style="float:left;padding-top:10px;width:160px;">
												<img  src="cost for 2.jpg" style="padding-left:55px;padding-top:15px;" align="center" >	
												<p style="width:130px;padding-left:15px;" align="center" >Approximate Cost for two People : Rs.800</p>
											</div>	
											
											<div style="float:left;width:200px;">
												
													<div style="float:left;margin-top:3px;">
														<div style="float:left">
															<img  src="homedelivery_small.png"  >													
														</div>
													
														<div style="float:left;" >													
															<p  id="home_dilver" style="font-size:12px;font-family:Arial;margin:3px;" >Home delivery: 1hr - 3hrs</p>													
														</div>
													</div>
													
													
													
													<div style="float:left;margin-top:-5px;">
														<div style="float:left">
															<img  src="online_payment.png"  >													
														</div>
													
														<div style="float:left;" >													
															<p  id="home_dilver" style="font-size:12px;font-family:Arial;margin:3px;" >Online Payment: Yes</p>													
														</div>
													</div>
													
													<div style="float:left;margin-top:-5px;">
														<div style="float:left">
															<img  src="table_booking.jpg"  >													
														</div>
													
														<div style="float:left;" >													
															<p  id="home_dilver" style="font-size:12px;font-family:Arial;margin:3px;" >Table Booking: Yes</p>													
														</div>
													</div>
													
													
													
													
													<div style="float:left;margin-top:-5px;">
														<div style="float:left">
															<img  src="min.png"  >													
														</div>
													
														<div style="float:left;" >													
															<p  id="home_dilver" style="font-size:12px;font-family:Arial;margin:3px;" >Min Order: Rs.200</p>													
														</div>
													</div>
													
													
													<div style="float:left;margin-top:-5px;">
														<div style="float:left">
															<img  src="smoking.png"  >													
														</div>
													
														<div style="float:left;" >													
															<p  id="home_dilver" style="font-size:12px;font-family:Arial;margin:3px;" >Smoking Zone: No</p>													
														</div>
													</div>
													
													
													<div style="float:left;margin-top:-5px;">
														<div style="float:left">
															<img  src="liquor.png"  >													
														</div>
													
														<div style="float:left;" >													
															<p  id="home_dilver" style="font-size:12px;font-family:Arial;margin:3px;" >Liquor: Yes</p>													
														</div>
													</div>
													
													<div style="float:left;clear:both;">
														<div style="float:left">
															<img  src="wifi.png"  >													
														</div>
													
														<div style="float:left;" >													
															<p  id="home_dilver" style="font-size:12px;font-family:Arial;margin:3px;" >Wifi: Yes</p>													
														</div>
													</div>
													
													
													
													
													
																										
													
													
													
											</div>	
											
											
										</div>	
										
											
											
											
											
																		
										
										
									</div>	
									
									
										<div style="margin-top:-10px;padding:0px;height:200px;float:left;">
													<div style="height:100px;" >
														<p style="font-size:20px;" align="center">Discount:</p> 
														<p style="margin:0px;font-size:42px;font-family: Algerian;color:red;" align="center"><b>50%</b></p> 
													</div>								
													
													<br>
													
													
													<div style="height:100px;">
															<img src="po.png" width="100" align="center" id="place_order"   style="padding:0px;padding-left:25px;" >
															<br>
															<img src="bt.png" width="100" align="center" id="place_order"   style="padding-top:10px;padding-left:25px;" >
													</div>
										</div>
										

									
									
									
									
								</div>		
					
					<br>
					
					<div style="padding:10px;width:780px;height:210px;border: 2px solid #000000;box-shadow: 10px 10px 5px #888888" id="menu_2" onmouseover="highlight('menu_2',1)" onmouseout="highlight('menu_2',0)" >
								
									<div style="margin:-10px;padding:0px;height:230px;float:left;border: 2px solid #000000;border-top:0px;border-left:0px;border-bottom:0px;">
										<div  style="padding:15px;">
											<img id= "search_results_div_image" src="3.jpg" width="130">
												<br>											
											<img  src="veg.jpg" width="20">										
											
										</div>									
									</div>
									
									<div  style="width:490px;height:230px;margin-left:10px;margin-top:-10px	;float:left;border:2px solid #000000;border-top:0px;border-left:0px;border-bottom:0px;" >
										<div style="border:2px solid #000000;border-top:0px;border-right:0px;border-left:0px;height:45px;">
											<img  src="menu.jpg"  class="menu_icon" >	
											<img  src="gallery_icon.jpg" class="menu_icon" >				
											<img  src="reviews.JPG" class="menu_icon" >
											<img  src="contact_us.jpg" class="menu_icon" >
										</div>	
										
										<div style="border:0px solid #000000;height:128px;">
											<div style="float:left;">
												<p style="padding-top:10px;width:130px;color:grey;font-size:13px;" align="center" >#23/2, Vittal Mallya Road, Bangalore - 560001</p>
												<p style="width:130px;color:grey;font-size:13px;" align="center">[Monday-Saturday]</p>
												<p style="width:130px;color:grey;font-size:13px;" align="center">9.30AM - 6.00PM</p>
											</div>	
											
											<div style="float:left;padding-top:10px;width:160px;">
												<img  src="cost for 2.jpg" style="padding-left:55px;padding-top:15px;" align="center" >	
												<p style="width:130px;padding-left:15px;" align="center" >Approximate Cost for two People : Rs.800</p>
											</div>	
											
											<div style="float:left;width:200px;">
												
													<div style="float:left;margin-top:3px;">
														<div style="float:left">
															<img  src="homedelivery_small.png"  >													
														</div>
													
														<div style="float:left;" >													
															<p  id="home_dilver" style="font-size:12px;font-family:Arial;margin:3px;" >Home delivery: 1hr - 3hrs</p>													
														</div>
													</div>
													
													
													
													<div style="float:left;margin-top:-5px;">
														<div style="float:left">
															<img  src="online_payment.png"  >													
														</div>
													
														<div style="float:left;" >													
															<p  id="home_dilver" style="font-size:12px;font-family:Arial;margin:3px;" >Online Payment: Yes</p>													
														</div>
													</div>
													
													<div style="float:left;margin-top:-5px;">
														<div style="float:left">
															<img  src="table_booking.jpg"  >													
														</div>
													
														<div style="float:left;" >													
															<p  id="home_dilver" style="font-size:12px;font-family:Arial;margin:3px;" >Table Booking: Yes</p>													
														</div>
													</div>
													
													
													
													
													<div style="float:left;margin-top:-5px;">
														<div style="float:left">
															<img  src="min.png"  >													
														</div>
													
														<div style="float:left;" >													
															<p  id="home_dilver" style="font-size:12px;font-family:Arial;margin:3px;" >Min Order: Rs.200</p>													
														</div>
													</div>
													
													
													<div style="float:left;margin-top:-5px;">
														<div style="float:left">
															<img  src="smoking.png"  >													
														</div>
													
														<div style="float:left;" >													
															<p  id="home_dilver" style="font-size:12px;font-family:Arial;margin:3px;" >Smoking Zone: No</p>													
														</div>
													</div>
													
													
													<div style="float:left;margin-top:-5px;">
														<div style="float:left">
															<img  src="liquor.png"  >													
														</div>
													
														<div style="float:left;" >													
															<p  id="home_dilver" style="font-size:12px;font-family:Arial;margin:3px;" >Liquor: Yes</p>													
														</div>
													</div>
													
													<div style="float:left;clear:both;">
														<div style="float:left">
															<img  src="wifi.png"  >													
														</div>
													
														<div style="float:left;" >													
															<p  id="home_dilver" style="font-size:12px;font-family:Arial;margin:3px;" >Wifi: Yes</p>													
														</div>
													</div>
													
													
													
													
													
																										
													
													
													
											</div>	
											
											
										</div>	
										
											
											
											
											
																		
										
										
									</div>	
									
									
										<div style="margin-top:-10px;padding:0px;height:200px;float:left;">
													<div style="height:100px;" >
														<p style="font-size:20px;" align="center">Discount:</p> 
														<p style="margin:0px;font-size:42px;font-family: 'Indie Flower', cursive;color:red;" align="center"><b> 50%</b></p> 
													</div>								
													
													<br>
													
													
													<div style="height:100px;">
															<img src="po.png" width="100" align="center" id="place_order"   style="padding:0px;padding-left:25px;" >
															<br>
															<img src="bt.png" width="100" align="center" id="place_order"   style="padding-top:10px;padding-left:25px;" >
													</div>
										</div>
										

									
									
									
									
								</div>		
					
					<br>
					
						
						
						
						
					</div>	

					
						
						
				
					
			
			
			
		</body>
		
		
</html>


