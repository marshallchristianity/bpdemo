<?php
if($_SERVER["HTTPS"] != "on")
{
     header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
     exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<!--Meta Tags-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="title" content="stayaway.com" />
	<meta name="keywords" content="stayaway, stayaway.com, hotels, rooms, accommodations, discounts, reservations, hotel, booking, luxury, deals, rates, Hotel, hotel deals, accommodation, hong kong shanghai beijing macau china, bangkok phuket thailand, singapore, tokyo kyoto osaka japan, manilla cebu philippines, seoul korea, mumbai bombay delhi bangalore goa calcutta india, sydney auckland melbourne australia, kuala lumpur malaysia, bali" />
	<meta name="Description" content="Stayaway is a secure and easy way of booking accommodations online. Here You find more than 100,000 accommodations worldwide in all price ranges, from the cheapest Hotel to the most luxurious Hotel.">
	
<!-- Title -->
	<title>Stayaway.com</title>
	<script type="text/javascript" src="https://stayaway.com/script/js/jquery-1.9.1.js"></script>
	<script src="<?php echo WEB_DIR; ?>script/jquery.js"></script>
	<!-- Stylesheets -->
	<link rel="stylesheet" href="https://stayaway.com/css/css/style.css" type="text/css"  media="all" />
	
	<link href="https://stayaway.com/css/css/new-look.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://stayaway.com/css/css/goldblack.css" type="text/css"  media="all"  />
	<link rel="stylesheet" href="https://stayaway.com/css/postion.css" type="text/css"  media="all" />
	<link rel="stylesheet" href="https://stayaway.com/css/css/responsive.css" type="text/css"  media="all" />
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,700,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo WEB_DIR; ?>datepickernew/themes/base/jquery.ui.all.css">
	<script src="<?php echo WEB_DIR; ?>datepickernew/ui/jquery.ui.core.js"></script> 
	<script src="<?php echo WEB_DIR; ?>datepickernew/ui/jquery.ui.widget.js"></script> 
	<script src="<?php echo WEB_DIR; ?>datepickernew/ui/jquery.ui.datepicker.js"></script>
	<link rel="stylesheet" href="<?php echo WEB_DIR; ?>datepickernew/demos.css">
	<script type="text/javascript" src="<?php echo WEB_DIR; ?>gui/ajax/ajaxsbmt.js"></script>

	<link rel="stylesheet" type="text/css" media="all" href="<?php echo WEB_DIR; ?>opencalender/jsDatePick_ltr.min.css" />
	<script type="text/javascript" src="<?php echo WEB_DIR; ?>opencalender/jsDatePick.min.1.3.js"></script>

	<script type="text/javascript" src="<?php echo WEB_DIR; ?>gui/valid/interger_only.js"></script>
	<!-- Favicon -->
	<link rel="shortcut icon" href="http://stayaway.com/favicon.ico" type="image/x-icon" />
	<link href="https://stayaway.com/css/css/new-look.css" rel="stylesheet" type="text/css" />
<style type="text/css">
@media only screen and (max-width: 479px) {
#hotel_details{left:-50px !important;}
#ui-datepicker-div .ui-datepicker-calendar tbody tr td a {
width: 25px !important;
}
</style>
<script language="javascript" type="text/javascript">	
function callModifyForm()
{
	$('#mofifyForm').toggle();
}
</script>
<!-- END head -->
		  <script>
		  $(document).ready(function () {
				$("#overlay").click(function() {
					$("#map_container").fadeOut( "slow" );
					$("#overlay").fadeOut( "slow" );
				});
				$("#show_map").click(function() {
					$("#map_container").fadeIn( "slow" );
					$("#overlay").fadeIn( "slow" );
				});
			});
		  </script>
</head>

<!-- BEGIN body -->
<body class="loading">
	

	<div id="background-wrapper">
	
	
	<!-- BEGIN #wrapper -->
	<div id="wrapper">
	<?php 
	$this->load->view('new-look/header_https');
	?>
	<div id="s1" style="margin-top: 35px;">
		
		<div class="mainbody" style="width:100%;margin-top: 20px;margin-left: 50px;">
			<div class="serachbar">
 <?php if(isset($_SESSION['city'])){ ?>
  	<div class="mid-txt" style="color:#514C4C; padding-top:10px; margin-top:10px;margin-left: 10px;">
    <span style="font-size:30px;">You</span> are searching</div>
 		<div class="left-topbox" style="width:210px;padding-top: 13px;">
        	<div><img src="<?php echo WEB_DIR; ?>images/bang-icon.jpg" border="0" style="position:relative; top:4px; padding-right:6px;" /><?php echo isset($_SESSION['city']) ? $_SESSION['city'] : "" ; ?></div>
            <div><img src="<?php echo WEB_DIR; ?>images/bang-icon1.jpg" border="0" style="position:relative; top:4px; padding-right:6px;" /><?php echo isset($_SESSION['sd']) ? $_SESSION['sd'] : ""; ?> to <?php echo isset($_SESSION['ed']) ? $_SESSION['ed'] : ""; ?></div>
            <div><img src="<?php echo WEB_DIR; ?>images/bang-icon2.jpg" border="0" style="position:relative; top:4px; padding-right:6px;" /><?php echo isset($_SESSION['adult_count']) ? $_SESSION['adult_count'] : "";
			//echo $_SESSION['org_adult'][0]; ?> Adults 
			<?php echo isset($_SESSION['child_count']) ? $_SESSION['child_count'] : ""; 
			  //echo $_SESSION['org_child'][0]; ?> Childs</div>
            <div><img src="<?php echo WEB_DIR; ?>images/bang-icon3.jpg" border="0" style="position:relative; top:4px; padding-right:6px;" /><?php echo isset($_SESSION['room_count']) ? $_SESSION['room_count'] : ""; ?> Room</div>
            <div style="float:right">
            <!--<a href="<?php echo WEB_URL; ?>"><img src="<?php echo WEB_DIR; ?>images/modify-sbut.png" border="0" style="position:relative; top:30px;" /></a>-->
            <a onclick="callModifyForm();"><img src="<?php echo WEB_DIR; ?>images/modify-sbut.png" border="0" style="position:relative; top:10px; cursor:pointer;"/></a></div>
         	</div>
      <?php } else{ ?>
           <div style="margin-left: 100px;">
            <!--<a href="<?php echo WEB_URL; ?>"><img src="<?php echo WEB_DIR; ?>images/modify-sbut.png" border="0" style="position:relative; top:30px;" /></a>-->
            <a onclick="callModifyForm();"><img src="<?php echo WEB_DIR; ?>images/modify-sbut.png" border="0" style="position:relative; top:10px; cursor:pointer;"/></a></div>
		<?php } ?>
		  <div style="clear:both; padding-top:20px;"></div>
           <form name="search_result" action="<?php echo WEB_URL; ?>hotels/search"  onsubmit="javascript:return form_sub();" method="post" id="mofifyForm" style="display:none;">
 <div style="width:210px; margin-left:10px;">

  <p style="color:#514C4C; font-size:12px; padding-bottom:10px;"><span style="font-size:28px;">Modify</span> your search</p>
  <p style="color:#514C4C; font-size:12px;">Destination: </p>
      <script type="text/javascript" src="<?php print WEB_DIR; ?>autofill/js/bsn.AutoSuggest_c_2.0.js"></script>
          <link rel="stylesheet" href="<?php print WEB_DIR; ?>autofill/css/autosuggest_inquisitor.css" type="text/css" media="screen" charset="utf-8" />
                                                  <p> <input type="hidden" id="testid" value="" style="font-size: 10px; width: 20px;" disabled="disabled" />
    <input  name="cityval" value="<?php echo isset($_SESSION['city']) ? $_SESSION['city'] : "" ; ?>"  style="width:205px;height:22px"  id="testinput"  type="text" size="28" />
   <script type="text/javascript">
	var options = {
		script:"<?php print WEB_DIR; ?>test_hotel.php?json=true&",varname:"input",json:true,callback: function (obj) { document.getElementById('testid').value = obj.id; } };
	var as_json = new AutoSuggest('testinput', options);

</script>

      <script type="text/javascript">
				function zeroPad(num,count)
				{
					var numZeropad = num + '';
					while(numZeropad.length < count) {
						numZeropad = "0" + numZeropad;
					}
					return numZeropad;
				}
				function dateADD(currentDate)
				{
					var valueofcurrentDate=currentDate.valueOf()+(24*60*60*1000);
					var newDate =new Date(valueofcurrentDate);
					return newDate;
				}
				function dateADD1(currentDate)
				{
					var valueofcurrentDate=currentDate.valueOf()-(24*60*60*1000);
					var newDate =new Date(valueofcurrentDate);
					return newDate;
				}

				$(function() {
					$( "#datepicker" ).datepicker({
						numberOfMonths: 3,
						dateFormat: 'dd-mm-yy',
						minDate: 0
					});
					$( "#datepicker1" ).datepicker({
						numberOfMonths: 3,
						dateFormat: 'dd-mm-yy',
						minDate: 1
					});
					$('#datepicker').change(function(){
						var selectedDate = $(this).datepicker('getDate');
						var str1 = $( "#datepicker1" ).val();
						var predayDate  = dateADD(selectedDate);
						var str2 = zeroPad(predayDate.getDate(),2)+"-"+zeroPad((predayDate.getMonth()+1),2)+"-"+(predayDate.getFullYear());
						var dt1  = parseInt(str1.substring(0,2),10);
						var mon1 = parseInt(str1.substring(3,5),10);
						var yr1  = parseInt(str1.substring(6,10),10);
						var dt2  = parseInt(str2.substring(0,2),10);
						var mon2 = parseInt(str2.substring(3,5),10);
						var yr2  = parseInt(str2.substring(6,10),10);
						var date1 = new Date(yr1, mon1, dt1);
						var date2 = new Date(yr2, mon2, dt2);
						if(date2 < date1)
						{

						}
						else
						{
							var nextdayDate  = dateADD(selectedDate);
							var nextDateStr = zeroPad(nextdayDate.getDate(),2)+"-"+zeroPad((nextdayDate.getMonth()+1),2)+"-"+(nextdayDate.getFullYear());
							$t = nextDateStr;
							$( "#datepicker1" ).datepicker({
								numberOfMonths: 3,
								dateFormat : 'dd-mm-yy',
								minDate: 1
							});
							$( "#datepicker1" ).val($t);
						}
					});

					$('#datepicker1').change(function(){
						var selectedDate = $(this).datepicker('getDate');
						var str1 = $( "#datepicker" ).val();
						var predayDate  = dateADD1(selectedDate);
						var str2 = zeroPad(predayDate.getDate(),2)+"-"+zeroPad((predayDate.getMonth()+1),2)+"-"+(predayDate.getFullYear());
						var dt1  = parseInt(str1.substring(0,2),10);
						var mon1 = parseInt(str1.substring(3,5),10);
						var yr1  = parseInt(str1.substring(6,10),10);
						var dt2  = parseInt(str2.substring(0,2),10);
						var mon2 = parseInt(str2.substring(3,5),10);
						var yr2  = parseInt(str2.substring(6,10),10);
						var date1 = new Date(yr1, mon1, dt1);
						var date2 = new Date(yr2, mon2, dt2);
						if(date2 < date1)
						{
							var nextdayDate  = dateADD1(selectedDate);
							var nextDateStr = zeroPad(nextdayDate.getDate(),2)+"-"+zeroPad((nextdayDate.getMonth()+1),2)+"-"+(nextdayDate.getFullYear());
							$t = nextDateStr;
							$( "#datepicker" ).datepicker({
								numberOfMonths: 3,
								dateFormat : 'dd-mm-yy',
								minDate: 0
							});
							$( "#datepicker" ).val($t);
						}
						else
						{
						}
					});
				});
				function hide_child1(adult)
					{
					if (window.XMLHttpRequest)
					{// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp=new XMLHttpRequest();
					}
					else
					{// code for IE6, IE5
						xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					}
					xmlhttp.onreadystatechange=function()
					{
					if (xmlhttp.readyState==4 && xmlhttp.status==200)
					{
						document.getElementById("inputfiled1_1").innerHTML=xmlhttp.responseText;
					}
					}
					if(adult==1)
					{
						document.getElementById('inputfiled1_1').style.display='block'; 
						document.getElementById('child_header').style.display='block'; 
						document.getElementById('age1').style.display='none'; 
						document.getElementById('age12').style.display='none'; 
						document.getElementById('age13').style.display='none'; 
						xmlhttp.open("GET","<?php print WEB_URL ?>hotel/child_dd_single/",true);
						xmlhttp.send();
					}
					else if(adult==2)
					{
						document.getElementById('inputfiled1_1').style.display='block'; 
						document.getElementById('child_header').style.display='block'; 
						document.getElementById('age1').style.display='none'; 
						document.getElementById('age12').style.display='none'; 
						document.getElementById('age13').style.display='none'; 
						xmlhttp.open("GET","<?php print WEB_URL ?>hotel/child_dd_double/",true);
						xmlhttp.send();
					}
					else if(adult==3)
					{
						document.getElementById('inputfiled1_1').style.display='block'; 
						document.getElementById('child_header').style.display='block';
						document.getElementById('age1').style.display='none'; 
						document.getElementById('age12').style.display='none'; 
						document.getElementById('age13').style.display='none';  
						xmlhttp.open("GET","<?php print WEB_URL ?>hotel/child_dd_triple/",true);
						xmlhttp.send();
					}
					else
					{
						document.getElementById('inputfiled1_1').style.display='none'; 
						document.getElementById('child_header').style.display='none'; 
						document.getElementById('age1').style.display='none'; 
						document.getElementById('age12').style.display='none'; 
						document.getElementById('age13').style.display='none'; 
					}
				}
				function hide_child2(adult)
				{
					if (window.XMLHttpRequest)
					{// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp=new XMLHttpRequest();
					}
					else
					{// code for IE6, IE5
						xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					}
					xmlhttp.onreadystatechange=function()
					{
					if (xmlhttp.readyState==4 && xmlhttp.status==200)
					{
						document.getElementById("inputfiled1_2").innerHTML=xmlhttp.responseText;
					}
					}
					if(adult==1)
					{
						document.getElementById('inputfiled1_2').style.display='block'; 
						document.getElementById('child_header2').style.display='block'; 
						document.getElementById('age2').style.display='none'; 
						document.getElementById('age22').style.display='none'; 
						document.getElementById('age23').style.display='none'; 
						xmlhttp.open("GET","<?php print WEB_URL ?>hotel/child_dd_single1/",true);
						xmlhttp.send();
					}
					else if(adult==2)
					{
						document.getElementById('inputfiled1_2').style.display='block'; 
						document.getElementById('child_header2').style.display='block'; 
						document.getElementById('age2').style.display='none'; 
						document.getElementById('age22').style.display='none'; 
						document.getElementById('age23').style.display='none'; 
						xmlhttp.open("GET","<?php print WEB_URL ?>hotel/child_dd_double1/",true);
						xmlhttp.send();
					}
					else if(adult==3)
					{
						document.getElementById('inputfiled1_2').style.display='block'; 
						document.getElementById('child_header2').style.display='block'; 
						document.getElementById('age2').style.display='none'; 
						document.getElementById('age22').style.display='none'; 
						document.getElementById('age23').style.display='none'; 
						xmlhttp.open("GET","<?php print WEB_URL ?>hotel/child_dd_triple1/",true);
						xmlhttp.send();
					}
					else
					{
						document.getElementById('inputfiled1_2').style.display='none'; 
						document.getElementById('child_header2').style.display='none'; 
						document.getElementById('age2').style.display='none'; 
						document.getElementById('age22').style.display='none'; 
						document.getElementById('age23').style.display='none'; 
					}
				}
				function hide_child3(adult)
				{
					if (window.XMLHttpRequest)
					{// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp=new XMLHttpRequest();
					}
					else
					{// code for IE6, IE5
						xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					}
					xmlhttp.onreadystatechange=function()
					{
					if (xmlhttp.readyState==4 && xmlhttp.status==200)
					{
						document.getElementById("inputfiled1_3").innerHTML=xmlhttp.responseText;
					}
					}
					if(adult==1)
					{
						document.getElementById('inputfiled1_3').style.display='block'; 
						document.getElementById('child_header3').style.display='block'; 
						document.getElementById('age3').style.display='none'; 
						document.getElementById('age32').style.display='none'; 
						document.getElementById('age33').style.display='none'; 
						xmlhttp.open("GET","<?php print WEB_URL ?>hotel/child_dd_single2/",true);
						xmlhttp.send();
					}
					else if(adult==2)
					{
						document.getElementById('inputfiled1_3').style.display='block'; 
						document.getElementById('child_header3').style.display='block';
						document.getElementById('age3').style.display='none'; 
						document.getElementById('age32').style.display='none'; 
						document.getElementById('age33').style.display='none';  
						xmlhttp.open("GET","<?php print WEB_URL ?>hotel/child_dd_double2/",true);
						xmlhttp.send();
					}
					else if(adult==3)
					{
						document.getElementById('inputfiled1_3').style.display='block'; 
						document.getElementById('child_header3').style.display='block'; 
						document.getElementById('age3').style.display='none'; 
						document.getElementById('age32').style.display='none'; 
						document.getElementById('age33').style.display='none'; 
						xmlhttp.open("GET","<?php print WEB_URL ?>hotel/child_dd_triple2/",true);
						xmlhttp.send();
					}
					else
					{
						document.getElementById('inputfiled1_3').style.display='none'; 
						document.getElementById('child_header3').style.display='none'; 
						document.getElementById('age3').style.display='none'; 
						document.getElementById('age32').style.display='none'; 
						document.getElementById('age33').style.display='none'; 
					}
				}
			</script>
                <?php
					$current_dte = isset($_SESSION['sd']) ? $_SESSION['sd'] : date("d-m-Y",strtotime("+7 days"));
					$next_dte =  isset($_SESSION['ed']) ? $_SESSION['ed'] :  date("d-m-Y",strtotime("+8 days"));
				?>
            
     
<p style="color:#514C4C; font-size:12px;">&nbsp; </p>
  <p style="color:#514C4C; font-size:12px;">Check-in Date: </p>
  <input  value="<?php echo $current_dte; ?>"   readonly="readonly"  name="sd" id="datepicker" type="text" class="check_bg_2" />
  <p style="color:#514C4C; font-size:12px;">&nbsp;</p>
  <p style="color:#514C4C; font-size:12px;">Check-out Date: </p>
<input   value="<?php echo $next_dte; ?>"   readonly="readonly"  name="ed" id="datepicker1" type="text" class="check_bg_2" />
  <p style="color:#514C4C; font-size:12px;"></p>
  
 </div>
  <div class="room_bor_bottom">
                                                <div class="modifi_search">
                                             <div class="wi102_0">
                                             		<p  style="color: #514C4C;
    font-size: 12px;">Room</p>
                                                    <p>  
<script type="text/javascript">
function display_adult_count(value)
{
if(value==1)
    {
       document.getElementById('room1').style.display='block'; 
       document.getElementById('room2').style.display='none'; 
       document.getElementById('room3').style.display='none'; 
    }
    if(value==2)
        {
		
        document.getElementById('room1').style.display='block'; 
       document.getElementById('room2').style.display='block'; 
       document.getElementById('room3').style.display='none';     
        }
        if(value==3)
            {
       document.getElementById('room1').style.display='block'; 
       document.getElementById('room2').style.display='block'; 
       document.getElementById('room3').style.display='block';     
                
            }
}

function display_child_count(value)
{

		if(value==1)
		{
		   document.getElementById('age1').style.display='block'; 
		   document.getElementById('age12').style.display='none'; 
		   document.getElementById('age13').style.display='none'; 
		   
		}
  		 if(value==2)
        {
		
       document.getElementById('age1').style.display='block'; 
       document.getElementById('age12').style.display='block'; 
	   document.getElementById('age13').style.display='none';   
        }
		 if(value==3)
        {
		
       document.getElementById('age1').style.display='block'; 
       document.getElementById('age12').style.display='block';  
	   document.getElementById('age13').style.display='block';  
        }
		 if(value==0)
        {
		
       document.getElementById('age1').style.display='none'; 
       document.getElementById('age12').style.display='none'; 
	   document.getElementById('age13').style.display='none';    
        }
      
}
function display_child_count1(value)
{

		if(value==1)
		{
		   document.getElementById('age2').style.display='block'; 
		   document.getElementById('age22').style.display='none'; 
		   document.getElementById('age23').style.display='none'; 
		   
		}
  		 if(value==2)
        {
		
       document.getElementById('age2').style.display='block'; 
       document.getElementById('age22').style.display='block'; 
	   document.getElementById('age23').style.display='none';   
        }
		 if(value==3)
        {
		
       document.getElementById('age2').style.display='block'; 
       document.getElementById('age22').style.display='block';  
	   document.getElementById('age23').style.display='block';  
        }
		 if(value==0)
        {
		
       document.getElementById('age2').style.display='none'; 
       document.getElementById('age22').style.display='none'; 
	   document.getElementById('age23').style.display='none';    
        }
      
}
function display_child_count2(value)
{

		if(value==1)
		{
		   document.getElementById('age3').style.display='block'; 
		   document.getElementById('age32').style.display='none'; 
		   document.getElementById('age33').style.display='none'; 
		   
		}
  		 if(value==2)
        {
		
       document.getElementById('age3').style.display='block'; 
       document.getElementById('age32').style.display='block'; 
	   document.getElementById('age33').style.display='none';   
        }
		 if(value==3)
        {
		
       document.getElementById('age3').style.display='block'; 
       document.getElementById('age32').style.display='block';  
	   document.getElementById('age33').style.display='block';  
        }
		 if(value==0)
        {
		
       document.getElementById('age3').style.display='none'; 
       document.getElementById('age32').style.display='none'; 
	   document.getElementById('age33').style.display='none';    
        }
      
}
 </script>
 <?php $room_count = isset($_SESSION['room_count']) ? $_SESSION['room_count'] : 1 ; ?>
                <select name="room_count"   onChange="display_adult_count(this.value)" class="jumb_25_for_new_1 pl5"  style="width:75px">
                <?php
				if($room_count==1 )
				{
                 echo ' <option value="1" selected="selected">1 Room</option>';
                  echo '  <option value="2">2 Rooms</option>';
                  echo '  <option value="3">3 Rooms</option>';
				}
				elseif( $room_count==2 )
				{
                 echo ' <option value="1" >1 Room</option>';
                  echo '  <option value="2"  selected="selected">2 Rooms</option>';
                  echo '  <option value="3">3 Rooms</option>';
				}elseif( $room_count==3 )
				{
                 echo ' <option value="1">1 Room</option>';
                  echo '  <option value="2">2 Rooms</option>';
                  echo '  <option value="3"  selected="selected">3 Rooms</option>';
				}
				else
				{
                 echo ' <option value="1" selected="selected">1 Room</option>';
                  echo '  <option value="2">2 Rooms</option>';
                  echo '  <option value="3">3 Rooms</option>';
				}
				
				?>
                </select></p>
                                             </div>
                                              <?php if($room_count==1 || $room_count==3 || $room_count==2)
						{
						
							?>   
                                             
                                             <div class="check_139 " id="room1">
              <DIV class="check_139" >
                <!--<div class="rooms_left"></div>-->
              
                <div class="wi40"  style="height: auto;">
                  <p style="color: #514C4C;
    font-size: 12px;">Adult</p>
                  <p>
                    <select name="adult[]" id="jumpMenu2" onchange="hide_child1(this.value)"  class="jumb_25_for_new_1 pl5">
                      <?php $s_adult = isset($_SESSION['org_adult'][0]) ? $_SESSION['org_adult'][0]: "";
					  if($s_adult == 1 )
					  {
                      echo '<option selected="selected" value="1">1</option>';
					   echo '<option value="2">2</option>';
                       echo '<option value="3">3</option>';
                       echo '<option value="4">4</option>';
					  }
					  elseif($s_adult == 2 )
					  {
                      echo '<option value="1">1</option>';
					   echo '<option selected="selected"  value="2">2</option>';
                       echo '<option value="3">3</option>';
                       echo '<option value="4">4</option>';
					   
					  }
					    elseif($s_adult == 3 )
					  {
                      echo '<option value="1">1</option>';
					   echo '<option value="2">2</option>';
                       echo '<option  selected="selected" value="3">3</option>';
                       echo '<option value="4">4</option>';
					   
					  }
					    elseif($s_adult == 4 )
					  {
                      echo '<option value="1">1</option>';
					   echo '<option value="2">2</option>';
                       echo '<option value="3">3</option>';
                       echo '<option selected="selected"  value="4">4</option>';
					   
					  }
					  else
					  {
						  echo '<option value="1">1</option>';
					   echo '<option value="2">2</option>';
                       echo '<option value="3">3</option>';
                       echo '<option  value="4">4</option>';
						  
					  }
					  ?>
                    </select>
                  </p>
                </div>
                <div class="wi40 padding_le ml10">
                  <p id="child_header"  style="color: #514C4C;
    font-size: 12px;">Children</p>
                  <div id="inputfiled1_1">
                    <select name="child[]" class="jumb_25_for_new_1"  onChange="display_child_count(this.value)" style="margin-left:11px;">
                        <?php $s_child = isset($_SESSION['org_child'][0]) ? $_SESSION['org_child'][0] : "";
					    if($s_child == 0 && $s_adult == 1 )
					  {
                      echo '<option selected="selected" value="0">0</option>';
					  echo '<option value="1">1</option>';
                      echo '<option value="2">2</option>';
					  echo '<option value="3">3</option>';
					  
					  }
					  elseif($s_child == 0 && $s_adult == 2 )
					  {
                      echo '<option selected="selected" value="0">0</option>';
					  echo '<option value="1">1</option>';
                      echo '<option value="2">2</option>';
					  }
					  elseif($s_child == 0 && $s_adult == 3 )
					  {
                      echo '<option selected="selected" value="0">0</option>';
					  echo '<option value="1">1</option>';
                	  }
					  elseif($s_child == 0 && $s_adult == 4 )
					  {
                      echo '<option selected="selected" value="0">0</option>';
					  }
					  elseif($s_child == 1  && $s_adult == 1 )
					  {
                      echo '<option value="0">0</option>';
					   echo '<option selected="selected"  value="1">1</option>';
                       echo '<option value="2">2</option>';
                       echo '<option value="3">3</option>';
					   
					  }
					   elseif($s_child == 1  && $s_adult == 2 )
					  {
                      echo '<option value="0">0</option>';
					   echo '<option selected="selected"  value="1">1</option>';
                       echo '<option value="2">2</option>';
                   
					   
					  }
					   elseif($s_child == 1  && $s_adult == 3 )
					  {
                      echo '<option value="0">0</option>';
					   echo '<option selected="selected"  value="1">1</option>';
                     
					   
					  }
					   
					    elseif($s_child == 2   && $s_adult == 1 )
					  {
                      echo '<option value="0">0</option>';
					   echo '<option value="1">1</option>';
                       echo '<option  selected="selected" value="2">2</option>';
                       echo '<option value="3">3</option>';
					   
					  }
					  elseif($s_child == 2   && $s_adult == 2 )
					  {
                      echo '<option value="0">0</option>';
					   echo '<option value="1">1</option>';
                       echo '<option  selected="selected" value="2">2</option>';
                     
					   
					  }
					  
					    elseif($s_child == 3  && $s_adult == 1)
					  {
                      echo '<option value="0">0</option>';
					   echo '<option value="1">1</option>';
                       echo '<option value="2">2</option>';
                       echo '<option selected="selected"  value="3">3</option>';
					   
					  }
					 
					  else
					  {
						  echo '<option value="0">0</option>';
					   echo '<option value="1">1</option>';
                       echo '<option value="2">2</option>';
                       echo '<option  value="3">3</option>';
						  
					  }
					  ?>
                    </select>
                  </div>
                </div>
              </DIV>
              <?php
			  if($s_child  == 1 || $s_child  == 2 || $s_child  == 3)
			  {
			  ?>
              <DIV class="check_149" id="age1" >
                <div class="AGE_OF2">Age Of Child 1</div>
                <div class="wi40 padding_le">
                  <p></p>
                  <p>
                    <select name="child_age[]" id="jumpMenu2"  class="jumb_25_for_new_1"  >
                      <?php for($i=1;$i< 13 ;$i++)
					{
					
						if(isset($_SESSION['child_age'][0]) == $i)
						{
                     echo '<option selected="selected" value="'.$i.'">'.$i.'</option>';
						}
						else
						{
                     echo '<option value="'.$i.'">'.$i.'</option>';
						}
					}
					?>
                    </select>
                  </p>
                </div>
              </DIV>
              <?php
			  }
			  else
			  {
				 ?>
                 <DIV class="check_149" id="age1" style="display:none;">
                <div class="AGE_OF2">Age Of Child 1</div>
                <div class="wi40 padding_le">
                  <p></p>
                  <p>
                    <select name="child_age[]" id="jumpMenu2"  class="jumb_25_for_new_1"  >
                     <?php for($i=1;$i< 13 ;$i++)
					{
						
                     echo '<option value="'.$i.'">'.$i.'</option>';
						
					}
					?>
                    </select>
                  </p>
                </div>
              </DIV>
                 <?php
			  }
			 
			  if($s_child  == 2 || $s_child  == 3)
			  {
			  ?>
              <DIV class="check_149"  id="age12" >
                <div class="AGE_OF2">Age Of Child 2</div>
                <div class="wi40 padding_le">
                  <p></p>
                  <p>
                    <select name="child_age[]" id="jumpMenu2"  class="jumb_25_for_new_1" >
                      <?php for($i=1;$i< 13 ;$i++)
					{
						if(isset($_SESSION['child_age'][1]) == $i)
						{
                     echo '<option selected="selected" value="'.$i.'">'.$i.'</option>';
						}
						else
						{
                     echo '<option value="'.$i.'">'.$i.'</option>';
						}
					}
					?>
                    </select>
                  </p>
                </div>
              </DIV>
              <?php
			  }
			  else
			  {
				  ?><DIV class="check_149"  id="age12"  style="display:none;">
                <div class="AGE_OF2">Age Of Child 2</div>
                <div class="wi40 padding_le">
                  <p></p>
                  <p>
                    <select name="child_age[]" id="jumpMenu2"  class="jumb_25_for_new_1" >
                     <?php for($i=1;$i< 13 ;$i++)
					{
						
                     echo '<option value="'.$i.'">'.$i.'</option>';
						
					}
					?>
                    </select>

                  </p>
                </div>
              </DIV>
                  <?php
			  }
			  ?>
              <?php
              if( $s_child  == 3)
			  { 	
				  ?>
              <DIV class="check_149"  id="age13" >
                <div class="AGE_OF2">Age Of Child 3</div>
                <div class="wi40 padding_le">
                  <p></p>
                  <p>
                    <select name="child_age[]" id="jumpMenu2"  class="jumb_25_for_new_1" >
                      <?php for($i=1;$i< 13 ;$i++)
					{
						if(isset($_SESSION['child_age'][2]) == $i)
						{
                     echo '<option selected="selected" value="'.$i.'">'.$i.'</option>';
						}
						else
						{
                     echo '<option value="'.$i.'">'.$i.'</option>';
						}
					}
					?>
                    </select>
                  </p>
                </div>
              </DIV>
            <?php
			  }
			  else
			  {
			  ?>
              <DIV class="check_149"  id="age13"  style="display:none;">
                <div class="AGE_OF2">Age Of Child 3</div>
                <div class="wi40 padding_le">
                  <p></p>
                  <p>
                    <select name="child_age[]" id="jumpMenu2"  class="jumb_25_for_new_1" >
                    <?php for($i=1;$i< 13 ;$i++)
					{
						
                     echo '<option value="'.$i.'">'.$i.'</option>';
						
					}
					?>
                    </select>
                  </p>
                </div>
              </DIV>
              <?php
			  }
			  ?>
             
            </div>
            <?php
						}
						else
						{
						?>
                        <div class="check_139 " id="room1">
              <DIV class="check_139" >
                <!--<div class="rooms_left"></div>-->
               
                <div class="wi40"  style="height: auto;">
                  <p style="color: #514C4C;

    font-size: 12px;">Adult</p>
                  <p>
                    <select name="adult[]" id="jumpMenu2" onchange="hide_child1(this.value)"  class="jumb_25_for_new_1 pl5">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                  </p>
                </div>
                <div class="wi40 padding_le ml10">
                  <p id="child_header"  style="color: #514C4C;
    font-size: 12px;">Children</p>
                  <div  id="inputfiled1_1">
                    <select name="child[]" class="jumb_25_for_new_1"  onChange="display_child_count(this.value)" style="margin-left:11px;">
                      <option value="0">0</option>
                      <option value="1">1</option>
                      <option value="2">2</option> <option value="3">3</option>
                    </select>
                  </div>
                </div>
              </DIV>
              
              <DIV class="check_149" id="age1" style="display:none;">
                <div class="AGE_OF2">Age Of Child 1</div>
                <div class="wi40 padding_le">
                  <p></p>
                  <p>
                    <select name="child_age[]" id="jumpMenu2"  class="jumb_25_for_new_1"  >
                      <?php for($i=1;$i< 13 ;$i++)
					{
						
                     echo '<option value="'.$i.'">'.$i.'</option>';
						
					}
					?>
                    </select>
                  </p>
                </div>
              </DIV>
              <DIV class="check_149"  id="age12"  style="display:none;">
                <div class="AGE_OF2">Age Of Child 2</div>
                <div class="wi40 padding_le">
                  <p></p>
                  <p>
                    <select name="child_age[]" id="jumpMenu2"  class="jumb_25_for_new_1" >
                     <?php for($i=1;$i< 13 ;$i++)
					{
						
                     echo '<option value="'.$i.'">'.$i.'</option>';
						
					}
					?>
                    </select>
                  </p>
                </div>
              </DIV>
              <DIV class="check_149"  id="age13"  style="display:none;">
                <div class="AGE_OF2">Age Of Child 3</div>
                <div class="wi40 padding_le">
                  <p></p>
                  <p>
                    <select name="child_age[]" id="jumpMenu2"  class="jumb_25_for_new_1" >
                     <?php for($i=1;$i< 13 ;$i++)
					{
						
                     echo '<option value="'.$i.'">'.$i.'</option>';
						
					}
					?>
                    </select>
                  </p>
                </div>
              </DIV>
            
             
            </div>
                        <?php
						}
						?>
						
             </div>
                        <?php if($room_count==2 || $room_count==3)
						{
						
							?>                       
        <div class="check_139	 ml17" style="float:right;display:none; margin-right:4px" id="room2">
              <DIV class="check_139" >
                <!--<div class="rooms_left"></div>-->
                <div class="wi40"  style="height: auto;">
                  <p></p>
                  <p>
                    <select name="adult[]" id="jumpMenu2" onchange="hide_child2(this.value)"  class="jumb_25_for_new_1 pl5">
                      <?php $s_adult1 = isset($_SESSION['org_adult'][1]) ? $_SESSION['org_adult'][1] : "";
					  if($s_adult1 == 1 )
					  {
                      echo '<option selected="selected" value="1">1</option>';
					   echo '<option value="2">2</option>';
                       echo '<option value="3">3</option>';
                       echo '<option value="4">4</option>';
					  }
					  elseif($s_adult1 == 2 )
					  {
                      echo '<option value="1">1</option>';
					   echo '<option selected="selected"  value="2">2</option>';
                       echo '<option value="3">3</option>';
                       echo '<option value="4">4</option>';
					   
					  }
					    elseif($s_adult1 == 3 )
					  {
                      echo '<option value="1">1</option>';
					   echo '<option value="2">2</option>';
                       echo '<option  selected="selected" value="3">3</option>';
                       echo '<option value="4">4</option>';
					   
					  }
					    elseif($s_adult1 == 4 )
					  {
                      echo '<option value="1">1</option>';
					   echo '<option value="2">2</option>';
                       echo '<option value="3">3</option>';
                       echo '<option selected="selected"  value="4">4</option>';
					   
					  }
					  else
					  {
						  echo '<option value="1">1</option>';
					   echo '<option value="2">2</option>';
                       echo '<option value="3">3</option>';
                       echo '<option  value="4">4</option>';
						  
					  }
					  ?>
                    </select>
                  </p>
                </div>
                <div class="wi40 padding_le ml10">
                  <p id="child_header2"></p>
                  <div id="inputfiled1_2">
                    <select name="child[]" class="jumb_25_for_new_1"  onChange="display_child_count1(this.value)">
                       <?php $s_child1 = isset($_SESSION['org_child'][1]) ? $_SESSION['org_child'][1]: "";
					  if($s_child1 == 0 && $s_adult1 == 1 )
					  {
                      echo '<option selected="selected" value="0">0</option>';
					  echo '<option value="1">1</option>';
                      echo '<option value="2">2</option>';
					  echo '<option value="3">3</option>';
					  
					  }
					  elseif($s_child1 == 0 && $s_adult1 == 2 )
					  {
                      echo '<option selected="selected" value="0">0</option>';
					  echo '<option value="1">1</option>';
                      echo '<option value="2">2</option>';
					  }
					  elseif($s_child1 == 0 && $s_adult1 == 3 )
					  {
                      echo '<option selected="selected" value="0">0</option>';
					  echo '<option value="1">1</option>';
                	  }
					  elseif($s_child1 == 0 && $s_adult1 == 4 )
					  {
                      echo '<option selected="selected" value="0">0</option>';
					  }
					  elseif($s_child1 == 1  && $s_adult1 == 1 )
					  {
                      echo '<option value="0">0</option>';
					   echo '<option selected="selected"  value="1">1</option>';
                       echo '<option value="2">2</option>';
                       echo '<option value="3">3</option>';
					   
					  }
					   elseif($s_child1 == 1  && $s_adult1 == 2 )
					  {
                      echo '<option value="0">0</option>';
					   echo '<option selected="selected"  value="1">1</option>';
                       echo '<option value="2">2</option>';
                   
					   
					  }
					   elseif($s_child1 == 1  && $s_adult1 == 3 )
					  {
                      echo '<option value="0">0</option>';
					   echo '<option selected="selected"  value="1">1</option>';
                     
					   
					  }
					   
					    elseif($s_child1 == 2   && $s_adult1 == 1 )
					  {
                      echo '<option value="0">0</option>';
					   echo '<option value="1">1</option>';
                       echo '<option  selected="selected" value="2">2</option>';
                       echo '<option value="3">3</option>';
					   
					  }
					  elseif($s_child1 == 2   && $s_adult1 == 2 )
					  {
                      echo '<option value="0">0</option>';
					   echo '<option value="1">1</option>';
                       echo '<option  selected="selected" value="2">2</option>';
                     
					   
					  }
					  
					    elseif($s_child1 == 3  && $s_adult1 == 1)
					  {
                      echo '<option value="0">0</option>';
					   echo '<option value="1">1</option>';
                       echo '<option value="2">2</option>';
                       echo '<option selected="selected"  value="3">3</option>';
					   
					  }
					 
					  
					  
					  ?>
                    </select>
                  </div>
                </div>
              </DIV>
               <?php
			  if($s_child1  == 1 || $s_child1  == 2 || $s_child1  == 3)
			  {
			  ?>
              <DIV class="check_149" id="age2" >
                <div class="AGE_OF2">Age Of Child 1</div>
                <div class="wi40 padding_le">
                  <p></p>
                  <p>
                    <select name="child_age[]" id="jumpMenu2"  class="jumb_25_for_new_1"  >
                      <?php for($i=1;$i< 13 ;$i++)
					{
						if(isset($_SESSION['child_age'][3]) == $i)
						{
                     echo '<option selected="selected" value="'.$i.'">'.$i.'</option>';
						}
						else
						{
                     echo '<option value="'.$i.'">'.$i.'</option>';
						}
					}
					?>
                    </select>
                  </p>
                </div>
              </DIV>
              <?php
			  }
			  else
			  {
				 ?>
                 <DIV class="check_149" id="age2" style="display:none;">
                <div class="AGE_OF2">Age Of Child 1</div>
                <div class="wi40 padding_le">
                  <p></p>
                  <p>
                    <select name="child_age[]" id="jumpMenu2"  class="jumb_25_for_new_1"  >
                     <?php for($i=1;$i< 13 ;$i++)
					{
						
                     echo '<option value="'.$i.'">'.$i.'</option>';
						
					}
					?>
                    </select>
                  </p>
                </div>
              </DIV>
                 <?php
			  }
			 
			  if($s_child1  == 2 || $s_child1  == 3)
			  {
			  ?>
              <DIV class="check_149"  id="age22" >
                <div class="AGE_OF2">Age Of Child 2</div>
                <div class="wi40 padding_le">
                  <p></p>
                  <p>
                    <select name="child_age[]" id="jumpMenu2"  class="jumb_25_for_new_1" >
                      <?php for($i=1;$i< 13 ;$i++)
					{
						if(isset($_SESSION['child_age'][4]) == $i)
						{
                     echo '<option selected="selected" value="'.$i.'">'.$i.'</option>';
						}
						else
						{
                     echo '<option value="'.$i.'">'.$i.'</option>';
						}
					}
					?>
                    </select>
                  </p>
                </div>
              </DIV>
              <?php
			  }
			  else
			  {
				  ?><DIV class="check_149"  id="age22"  style="display:none;">
                <div class="AGE_OF2">Age Of Child 2</div>
                <div class="wi40 padding_le">
                  <p></p>
                  <p>
                    <select name="child_age[]" id="jumpMenu2"  class="jumb_25_for_new_1" >
                     <?php for($i=1;$i< 13 ;$i++)
					{
						
                     echo '<option value="'.$i.'">'.$i.'</option>';
						
					}
					?>
                    </select>
                  </p>
                </div>
              </DIV>
                  <?php
			  }
			  ?>
              <?php
              if( $s_child1  == 3)
			  { 	
				  ?>
              <DIV class="check_149"  id="age23" >
                <div class="AGE_OF2">Age Of Child 3</div>
                <div class="wi40 padding_le">
                  <p></p>
                  <p>
                    <select name="child_age[]" id="jumpMenu2"  class="jumb_25_for_new_1" >
                      <?php for($i=1;$i< 13 ;$i++)
					{
						if(isset($_SESSION['child_age'][5]) == $i)
						{
                     echo '<option selected="selected" value="'.$i.'">'.$i.'</option>';
						}
						else
						{
                     echo '<option value="'.$i.'">'.$i.'</option>';
						}
					}
					?>
                    </select>
                  </p>
                </div>
              </DIV>
            <?php
			  }
			  else
			  {
			  ?>
              <DIV class="check_149"  id="age23"  style="display:none;">
                <div class="AGE_OF2">Age Of Child 3</div>
                <div class="wi40 padding_le">
                  <p></p>
                  <p>
                    <select name="child_age[]" id="jumpMenu2"  class="jumb_25_for_new_1" >
                    <?php for($i=1;$i< 13 ;$i++)
					{
						
                     echo '<option value="'.$i.'">'.$i.'</option>';
						
					}
					?>
                    </select>
                  </p>
                </div>
              </DIV>
              <?php
			  }
			  ?>
              
          </div>
          <?php
						}
						else
						{
						?>
                        	                    
        <div class="check_139	 ml17" style="float:right; display:none; margin-right:4px" id="room2">
              <DIV class="check_139" >
                <!--<div class="rooms_left"></div>-->
                <div class="wi40"  style="height: auto;">
                  <p></p>
                  <p>
                    <select name="adult[]" id="jumpMenu2" onchange="hide_child2(this.value)"  class="jumb_25_for_new_1 pl5">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                  </p>
                </div>
                <div class="wi40 padding_le ml10">
                  <p id="child_header2"></p>
                  <div  id="inputfiled1_2">
                    <select name="child[]"  class="jumb_25_for_new_1"  onChange="display_child_count1(this.value)">
                      <option value="0">0</option>
                      <option value="1">1</option>
                      <option value="2">2</option> <option value="3">3</option>
                    </select>
                  </div>
                </div>
              </DIV>
               <DIV class="check_149" id="age2" style="display:none;">
                <div class="AGE_OF2">Age Of Child 1</div>
                <div class="wi40 padding_le">
                  <p></p>
                  <p>
                    <select name="child_age[]" id="jumpMenu2"  class="jumb_25_for_new_1"  >
                    <?php for($i=1;$i< 13 ;$i++)
					{
						
                     echo '<option value="'.$i.'">'.$i.'</option>';
						
					}
					?>
                    </select>
                  </p>
                </div>
              </DIV>
              <DIV class="check_149"  id="age22"  style="display:none;">
                <div class="AGE_OF2">Age Of Child 2</div>
                <div class="wi40 padding_le">
                  <p></p>
                  <p>
                    <select name="child_age[]" id="jumpMenu2"  class="jumb_25_for_new_1" >
                    <?php for($i=1;$i< 13 ;$i++)
					{
						
                     echo '<option value="'.$i.'">'.$i.'</option>';
						
					}
					?>
                    </select>
                  </p>
                </div>
              </DIV>
              <DIV class="check_149"  id="age23"  style="display:none;">
                <div class="AGE_OF2">Age Of Child 3</div>
                <div class="wi40 padding_le">
                  <p></p>
                  <p>
                    <select name="child_age[]" id="jumpMenu2"  class="jumb_25_for_new_1" >
                     <?php for($i=1;$i< 13 ;$i++)
					{
						
                     echo '<option value="'.$i.'">'.$i.'</option>';
						
					}
					?>
                    </select>
                  </p>
                </div>
              </DIV>
              
          </div>
          <?php
						}
						?>

                        
                         <?php 
						
						 if(isset($_SESSION['room_count'])==3 )
						{
							
							?>
  <div class="check_139	 ml17" style="float:right;display:none;  margin-right:4px" id="room3">
              <DIV class="check_139" >
                <!--<div class="rooms_left"></div>-->
                <div class="wi40" style="height: auto;">
                  <p></p>
                  <p>
                    <select name="adult[]" id="jumpMenu2" onchange="hide_child3(this.value)"  class="jumb_25_for_new_1 pl5">
                      <?php $s_adult2 = isset($_SESSION['org_adult'][2]) ? $_SESSION['org_adult'][2] : "";
					  
					  
					  if($s_adult2 == 1 )
					  {
                      echo '<option selected="selected" value="1">1</option>';
					   echo '<option value="2">2</option>';
                       echo '<option value="3">3</option>';
                       echo '<option value="4">4</option>';
					  }
					  elseif($s_adult2 == 2 )
					  {
                      echo '<option value="1">1</option>';
					   echo '<option selected="selected"  value="2">2</option>';
                       echo '<option value="3">3</option>';
                       echo '<option value="4">4</option>';
					   
					  }
					    elseif($s_adult2 == 3 )
					  {
                      echo '<option value="1">1</option>';
					   echo '<option value="2">2</option>';
                       echo '<option  selected="selected" value="3">3</option>';
                       echo '<option value="4">4</option>';
					   
					  }
					    elseif($s_adult2 == 4 )
					  {
						 
                      echo '<option value="1">1</option>';
					   echo '<option value="2">2</option>';
                       echo '<option value="3">3</option>';
                       echo '<option selected="selected"  value="4">4</option>';
					   
					  }
					  else
					  {
						  echo '<option value="1">1</option>';
					   echo '<option value="2">2</option>';
                       echo '<option value="3">3</option>';
                       echo '<option  value="4">4</option>';
						  
					  }
					  ?>
                    </select>
                  </p>
                </div>
                <div class="wi40 padding_le ml10">
                  <p id="child_header3"></p>
                 <div id="inputfiled1_3">
                    <select name="child[]" class="jumb_25_for_new_1"  onChange="display_child_count2(this.value)">
                      <?php $s_child2 = $_SESSION['org_child'][2];
					  if($s_child2 == 0 && $s_adult2 == 1 )
					  {
                      echo '<option selected="selected" value="0">0</option>';
					  echo '<option value="1">1</option>';
                      echo '<option value="2">2</option>';
					  echo '<option value="3">3</option>';
					  
					  }
					  elseif($s_child2 == 0 && $s_adult2 == 2 )
					  {
                      echo '<option selected="selected" value="0">0</option>';
					  echo '<option value="1">1</option>';
                      echo '<option value="2">2</option>';
					  }
					  elseif($s_child2 == 0 && $s_adult2 == 3 )
					  {
                      echo '<option selected="selected" value="0">0</option>';
					  echo '<option value="1">1</option>';
                	  }
					  elseif($s_child2 == 0 && $s_adult2 == 4 )
					  {
                      echo '<option selected="selected" value="0">0</option>';
					  }
					  elseif($s_child2 == 1  && $s_adult2 == 1 )
					  {
                      echo '<option value="0">0</option>';
					   echo '<option selected="selected"  value="1">1</option>';
                       echo '<option value="2">2</option>';
                       echo '<option value="3">3</option>';
					   

					  }
					   elseif($s_child2 == 1  && $s_adult2 == 2 )
					  {
                      echo '<option value="0">0</option>';
					   echo '<option selected="selected"  value="1">1</option>';
                       echo '<option value="2">2</option>';
                   
					   
					  }
					   elseif($s_child2 == 1  && $s_adult2 == 3 )
					  {
                      echo '<option value="0">0</option>';
					   echo '<option selected="selected"  value="1">1</option>';
                     
					   
					  }
					   
					    elseif($s_child2 == 2   && $s_adult2 == 1 )
					  {
                      echo '<option value="0">0</option>';
					   echo '<option value="1">1</option>';
                       echo '<option  selected="selected" value="2">2</option>';
                       echo '<option value="3">3</option>';
					   
					  }
					  elseif($s_child2 == 2   && $s_adult2 == 2 )
					  {
                      echo '<option value="0">0</option>';
					   echo '<option value="1">1</option>';
                       echo '<option  selected="selected" value="2">2</option>';
                     
					   
					  }
					  
					    elseif($s_child2 == 3  && $s_adult2 == 1)
					  {
                      echo '<option value="0">0</option>';
					   echo '<option value="1">1</option>';
                       echo '<option value="2">2</option>';
                       echo '<option selected="selected"  value="3">3</option>';
					   
					  }
					 
					  else
					  {
						  echo '<option value="0">0</option>';
					   echo '<option value="1">1</option>';
                       echo '<option value="2">2</option>';
                       echo '<option  value="3">3</option>';
						  
					  }
					  ?>
                    </select>
                  </div>
                </div>
              </DIV>
              <?php
			  if($s_child2  == 1 || $s_child2  == 2 || $s_child2 == 3)
			  {
			  ?>
              <DIV class="check_149" id="age3" >
                <div class="AGE_OF2">Age Of Child 1</div>
                <div class="wi40 padding_le">
                  <p></p>
                  <p>
                    <select name="child_age[]" id="jumpMenu2"  class="jumb_25_for_new_1"  >
                      <?php for($i=1;$i< 13 ;$i++)
					{
						if(isset($_SESSION['child_age'][6]) == $i)
						{
                     echo '<option selected="selected" value="'.$i.'">'.$i.'</option>';
						}
						else
						{
                     echo '<option value="'.$i.'">'.$i.'</option>';
						}
					}
					?>
                    </select>
                  </p>
                </div>
              </DIV>
              <?php
			  }
			  else
			  {
				 ?>
                 <DIV class="check_149" id="age3" style="display:none;">
                <div class="AGE_OF2">Age Of Child 1</div>
                <div class="wi40 padding_le">
                  <p></p>
                  <p>
                    <select name="child_age[]" id="jumpMenu2"  class="jumb_25_for_new_1"  >
                     <?php for($i=1;$i< 13 ;$i++)
					{
						
                     echo '<option value="'.$i.'">'.$i.'</option>';
						
					}
					?>
                    </select>
                  </p>
                </div>
              </DIV>
                 <?php
			  }
			 
			  if($s_child2  == 2 || $s_child2  == 3)
			  {
			  ?>
              <DIV class="check_149"  id="age32" >
                <div class="AGE_OF2">Age Of Child 2</div>
                <div class="wi40 padding_le">
                  <p></p>
                  <p>
                    <select name="child_age[]" id="jumpMenu2"  class="jumb_25_for_new_1" >
                      <?php for($i=1;$i< 13 ;$i++)
					{
						if(isset($_SESSION['child_age'][7]) == $i)
						{
                     echo '<option selected="selected" value="'.$i.'">'.$i.'</option>';
						}
						else
						{
                     echo '<option value="'.$i.'">'.$i.'</option>';
						}
					}
					?>
                    </select>
                  </p>
                </div>
              </DIV>
              <?php
			  }
			  else
			  {
				  ?><DIV class="check_149"  id="age32"  style="display:none;">
                <div class="AGE_OF2">Age Of Child 2</div>
                <div class="wi40 padding_le">
                  <p></p>
                  <p>
                    <select name="child_age[]" id="jumpMenu2"  class="jumb_25_for_new_1" >
                     <?php for($i=1;$i< 13 ;$i++)
					{
						
                     echo '<option value="'.$i.'">'.$i.'</option>';
						
					}
					?>
                    </select>
                  </p>
                </div>
              </DIV>
                  <?php
			  }
			  ?>
              <?php
              if( $s_child2  == 3)
			  { 	
				  ?>
              <DIV class="check_149"  id="age33" >
                <div class="AGE_OF2">Age Of Child 3</div>
                <div class="wi40 padding_le">
                  <p></p>
                  <p>
                    <select name="child_age[]" id="jumpMenu2"  class="jumb_25_for_new_1" >
                      <?php for($i=1;$i< 13 ;$i++)
					{
						if(isset($_SESSION['child_age'][8]) == $i)
						{
                     echo '<option selected="selected" value="'.$i.'">'.$i.'</option>';
						}
						else
						{
                     echo '<option value="'.$i.'">'.$i.'</option>';
						}
					}
					?>
                    </select>
                  </p>
                </div>
              </DIV>
            <?php
			  }
			  else
			  {
			  ?>
              <DIV class="check_149"  id="age33"  style="display:none;">
                <div class="AGE_OF2">Age Of Child 3</div>
                <div class="wi40 padding_le">
                  <p></p>
                  <p>
                    <select name="child_age[]" id="jumpMenu2"  class="jumb_25_for_new_1" >
                    <?php for($i=1;$i< 13 ;$i++)
					{
						
                     echo '<option value="'.$i.'">'.$i.'</option>';
						
					}
					?>
                    </select>
                  </p>
                </div>
              </DIV>
              <?php
			  }
			  ?>
              
          </div>
          <?php
						}
						else
						{
							?>
                              <div class="check_139	 ml17" style="float:right; display:none; margin-right:4px" id="room3">
              <DIV class="check_139" >
                <!--<div class="rooms_left"></div>-->
                <div class="wi40" style="height: auto;">
                  <p></p>
                  <p>
                    <select name="adult[]" id="jumpMenu2" onchange="hide_child3(this.value)"  class="jumb_25_for_new_1 pl5">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                  </p>
                </div>
                <div class="wi40 padding_le ml10">
                  <p id="child_header3"></p>
                  <div id="inputfiled1_3">
                    <select name="child[]" class="jumb_25_for_new_1"  onChange="display_child_count2(this.value)">
                      <option value="0">0</option>
                      <option value="1">1</option>
                      <option value="2">2</option> <option value="3">3</option>
                    </select>
                  </div>
                </div>
              </DIV>
               <DIV class="check_149" id="age3" style="display:none;">
                <div class="AGE_OF2">Age Of Child 1</div>
                <div class="wi40 padding_le">
                  <p></p>
                  <p>
                    <select name="child_age[]" id="jumpMenu2"  class="jumb_25_for_new_1"  >
                    <?php for($i=1;$i< 13 ;$i++)
					{
						
                     echo '<option value="'.$i.'">'.$i.'</option>';
						
					}
					?>
                    </select>
                  </p>
                </div>
              </DIV>
              <DIV class="check_149"  id="age32"  style="display:none;">
                <div class="AGE_OF2">Age Of Child 2</div>
                <div class="wi40 padding_le">
                  <p></p>
                  <p>
                    <select name="child_age[]" id="jumpMenu2"  class="jumb_25_for_new_1" >
                     <?php for($i=1;$i< 13 ;$i++)
					{
						
                     echo '<option value="'.$i.'">'.$i.'</option>';
						
					}
					?>
                    </select>
                  </p>
                </div>
              </DIV>
              <DIV class="check_149"  id="age33"  style="display:none;">
                <div class="AGE_OF2">Age Of Child 3</div>
                <div class="wi40 padding_le">
                  <p></p>
                  <p>
                    <select name="child_age[]" id="jumpMenu2"  class="jumb_25_for_new_1" >
                   <?php for($i=1;$i< 13 ;$i++)
					{
						
                     echo '<option value="'.$i.'">'.$i.'</option>';
						
					}
					?>
                    </select>
                  </p>
                </div>
              </DIV>
              
          </div><?php
						}
						?>
                                                </div>
  <div>
  <p><input type="image" src="<?php echo WEB_DIR; ?>images/search_bt.png" width="83" height="27" border="0" align="right" style="padding:0px 10px 10px 0px;"/></p>
  </div>
  </form>
  </div>
			<div id="hotel_details" class="hotel_details" style="position: relative;left:80px;background-color: #FFF;width: 670px;min-height: 300px;padding:20px 20px 50px;display: inline-block;line-height:185%;">
				 <table width="100%" border="0" cellspacing="7" cellpadding="3" class="r-hoteldeta">
          <tr>
          	<td colspan="2" class="right-hotel-name"><?php echo $service[0]->hotel_name; ?></td>
          </tr>
          <tr>
            <td>Location :</td>
            <td style="color:#227fb0"><?php echo $service[0]->address; ?></td>
          </tr>
          <tr>
          	<td>Check-in:</td>
            <td style="color:#227fb0"><?php echo $_SESSION['sd']; ?></td>
          </tr>
          <tr>
          	<td>Check-Out:</td>
            <td style="color:#227fb0"><?php echo $_SESSION['ed']; ?></td>
          </tr>
          <tr>
          	<td>Room Type </td>
            <td style="color:#227fb0"><?php
			if($api == "hotelsbed"){
				 $cost=0;
				  $markup=0;
				   $payment_charge=0;
				    $org_amt=0;
					
				  $a=explode("-",$room_id);
				  $sec_res=$_SESSION['ses_id'];
				  $room_type='';
				  
				for($k=0;$k< count($room_info1);$k++)
				 {
					
					$cost = $cost + number_format($this->session->userdata('currency_value') * $room_info1[$k]['cost'], 2, '.', ',');
				 
					$markup = $markup + $room_info1[$k]['markup'];  
					$payment_charge = $payment_charge + $room_info1[$k]['payment_charge'];  
					$org_amt = $org_amt + $room_info1[$k]['org_amt'];  
					$currency_val = $this->session->userdata('currency'); 
					$xml_currency = $this->session->userdata('currency_value'); 
					$total = $total + $room_info1[$k]['cost'];
				 
					$room_type .= $room_info1[$k]['room_type']."-".$room_info1[$k]['inclusion']."<br>";  
				}
					
				
				 echo $room_type; }else{
					echo $room_info['room_type']."-".$room_info['inclusion']."<br>";
					$cost = number_format($this->session->userdata('currency_value') * $room_info['cost'], 2, '.', ',');
				 }?>
				 </td>
          </tr>
          <tr>
          	<td>For</td>
            <td style="color:#227fb0"><?php echo $_SESSION['days']; ?> night, <?php echo $_SESSION['room_count']; ?> rooms, max. <?php echo $_SESSION['adult_count']; ?> people.</td>
          </tr>
          <tr>
          	<td><?php echo $_SESSION['room_count']; ?> Rooms </td>
            <td style="color:#227fb0"><?php
				 
				  ?>  <?php echo $cost.' '.$this->session->userdata('currency'); ?></td>
          </tr>
          <tr>
          	<td>VAT (0%) included </td>
            <td style="color:#227fb0">$ 0.00</td>
          </tr>
          <tr>
          	<td colspan="2">&nbsp;</td>
          </tr>
          <tr>
          	<td colspan="2" style="font-size:16px; font-weight:bold">Booking conditions</td>
          </tr>
          <tr>
          	<td colspan="2"><?php echo $cancel_policy; ?></td>
          </tr>
          
        </table>
		<form name="book" action="https://stayaway.com/index.php/hotels/pre_booking/<?php echo $result_id; ?>/<?php echo $id; ?>/<?php echo $room_id; ?>" method="post" accept-charset="UTF-8">
<input type="hidden" name="result_id" value="<?php echo $result_id; ?>" />
<input type="hidden" name="amount" value="<?php echo $cost; ?>" />
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="hidden" name="room_id" value="<?php echo $room_id; ?>" />
<input type="hidden" name="xml_currency" value="<?php echo $xml_currency; ?>" />
<input type="hidden" name="payment_charge" value="<?php echo $payment_charge; ?>" />
<input type="hidden" name="org_amt" value="<?php echo $org_amt; ?>" />
<input type="hidden" name="markup" value="<?php echo $markup; ?>" />
<input type="hidden" name="total" value="<?php echo $total; ?>" />
<input type="hidden" name="currency_val" value="<?php echo $currency_val; ?>" />

<input type="hidden" name="cancel_policy" value="<?php echo $cancel_policy; ?>" />
<input type="hidden" name="room_type" value="<?php echo $room_type; ?>" />
<input type="hidden" name="cancel_charge_n"  value="<?php echo $new_cancelaion_charge; ?>">
<input type="hidden" name="cancel_till_n"  value="<?php echo $new_cancelaion_till_date; ?>">   
    <div id="r-box">
    	<div class="mid-txt" style="margin:5px 5px 5px 15px;">Customer Details 
		<?php 
        if(isset($_SESSION['logged_in']) || isset($_SESSION['agent_logged_in'])) { }
		else{
		?>
			<a style="float:right;cursor:pointer;" onclick="signinBox1();"><img src="https://stayaway.com/images/sign-but.png" border="0" width="90" height="35"/></a>&nbsp;
            <a style="float:right;cursor:pointer;margin-right: 5px;" onclick="signupBox();"><img src="https://stayaway.com/images/b2b-register.png" border="0" width="90" height="35"/></a>
        <?php
		}
		?>
		</div>
        <div class="sum-txt" style="margin:-15px 5px 5px 15px;">Please fill the names of the passengers as they officially appear on identities or passports. </div>
    </div>
    
    <table align="left" width="670" border="0" cellspacing="5" cellpadding="5" class="sum-txt" id="div-rightbox">
      <?php
		 
							 if(isset($_SESSION['logged_in']))
							 {
								 $email = $_SESSION['b2c_email'];
							 }
							 else
							 {
								 $email ='';
							 }
						//r-txtbox	 
						//print_r($_SESSION);
						//echo $_SESSION['b2c_userid'];
						if(isset($_SESSION['b2c_userid'])){
						$profile = $this->Account_Model->user_profile_info($_SESSION['b2c_userid']);
						}
		   ?>
      <tr>
        <td width="230" style="padding-top: 25px;">Email Address *</td>
        <td width="475">   <input required type="text"  name="email" onchange="checkValid(this.value)" id="e1"value="<?php if(set_value('email')!=''){ echo set_value('email'); } else { echo $email; } ?>" class="r-txtbox" >
       <!-- <br/><div style="color:#F60;" id="email_exist"></div>-->
	    <div style=" margin-left: 3px;
    position: absolute;
    width: 240px; color:#900"><?php
    echo form_error('email');

 ?></div>
           </td>
      </tr>
      <tr>
        <td style="padding-top: 25px;">Confirm Email Address *</td>
        <td><input type="text" required name="cemail"  id="e2" value="<?php if(set_value('cemail')!=''){ echo set_value('cemail'); } else { echo $email; } ?>"  class="r-txtbox" 
        onChange="return checkEmail(this.value)"/>
         <!--<br/><div style="color:#F60;" id="cemail_exists"></div>-->
            <div style=" margin-left: 3px;
    position: absolute;
    width: 300px; color:#900"><?php
    echo form_error('cemail');

 ?></div>
 
 <script>
 
/*function checkEmail1() {
	alert('sakfjl');
    var email = $("#e1").val();
    var cemail = $("#e2").val();

    if (password != confirmPassword){
        $("#email_exists").html("Email doesn't match!");
		//document.getElementById("email_exists").innerHTML='Email doesn't match';
    else
        $("#email_exists").html("Email matches.");
}*/

function checkEmail(mnh) {
	
	var email=document.book.email.value;
	var cemail=	document.book.cemail.value;
	
	var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	if(!(emailPattern.test(cemail)))
	{
		document.getElementById("cemail_exists").innerHTML='Please Enter a valid Email Address';
		return false;
	}
	else{
	if (email != cemail){
		
		document.getElementById("cemail_exists").innerHTML='Confirmation Email does not match with the Email address';
		return false;
	}
	else{
		document.getElementById("cemail_exists").innerHTML='';	
	}
	}
	
}
function checknum(num){
	var num = document.book.mobile.value;
	var numpattern = /^\+?[0-9]+$/;
	if(num.length > 12){
		document.getElementById("numerr").innerHTML='Please Enter a valid mobile number';
		return false;
	}
	else if(!(numpattern.test(num)))
	{
		document.getElementById("numerr").innerHTML='Please Enter a valid mobile number';
		return false;
	}else{
		document.getElementById("numerr").innerHTML='';	
	}
}
</script>
 </td>
      </tr>
      <tr>
        <td style="padding-top: 25px;">Address *</td>
        <td><input required type="text" name="address" value="<?php if(isset($profile->address) && $profile->address != '') echo $profile->address; ?>" class="r-txtbox" autocomplete="off" onChange="checkAddress(this.value)"/>
        	<!--<input type="text" name="address" value="<?php echo set_value('address'); ?>" class="r-txtbox" autocomplete="off">-->
            <div style=" margin-left: 3px;
    position: absolute;
    width: 240px; color:#900"><?php
    echo form_error('address');

 ?></div></td>
      </tr>
      <tr>
        <td style="padding-top: 25px;">City *</td>
        <td><input required type="text" name="city"  value="<?php if(isset($profile->city) && $profile->city != '') echo $profile->city; ?>"  class="r-txtbox" autocomplete="off">
        	<!--<input type="text" name="city"  value="<?php echo set_value('city'); ?>"  class="r-txtbox" autocomplete="off">-->
            <div style=" margin-left: 3px;
    position: absolute;
    width: 240px; color:#900"><?php
    echo form_error('city');

 ?></div></td>
      </tr>
      <tr>
        <td style="padding-top: 25px;">Zip/Post Code *</td>
        <td><input required type="text"   name="pin"  value="<?php if(isset($profile->postal_code) && $profile->postal_code != '') echo $profile->postal_code; ?>"  class="r-txtbox" autocomplete="off">
        	<!--<input type="text" name="pin"  value="<?php echo set_value('pin'); ?>"  class="r-txtbox" autocomplete="off">-->
            <div style=" margin-left: 3px;
    position: absolute;
    width: 240px; color:#900"><?php
    echo form_error('pin');

 ?></div></td>
      </tr>
      <tr>
        <td style="padding-top: 25px;">Country *</td>
        <td>  <?php
		  $country = $this->Hotel_Model->country_list();
		  echo '<select  name="country"  class="r-txtbox" autocomplete="off">';
		  echo '<option value="'.set_value('country').'" >'.set_value('country').'</option>';
		
		  for($iii=0;$iii<count($country);$iii++)
		  {
		  ?>
            <option value="<?php echo $country[$iii]->name;?>" <?php if(isset($profile->country) && $profile->country == $country[$iii]->name) { echo "selected='selected'"; } ?>  ><?php  echo $country[$iii]->name;  ?></option>
            <?php
			
		  }
		  echo '</select>';
		  ?>
            <div style=" margin-left: 3px;
    position: absolute;
    width: 240px; color:#900"><?php
    echo form_error('country');

 ?></div></td>
      </tr>
      <tr>
        <td style="padding-top: 25px;">Telephone *</td>
        <td><input type="text" required name="mobile" value="<?php if(isset($profile->mobile_no) && $profile->mobile_no != '') echo $profile->mobile_no; ?>"  class="r-txtbox" 
		onChange="return checknum(this.value)" autocomplete="off">
        	<!--<input type="text" name="mobile"  value="<?php echo set_value('mobile'); ?>"  class="r-txtbox" autocomplete="off">-->
            <div style=" margin-left: 3px;
    position: absolute;
    width: 240px; color:#900" id="numerr"><?php
    echo form_error('mobile');

 ?></div></td>
      </tr>
    </table>
      <?php
		
		 // for($i=0;$i< count($room_info); $i++)
		 for($i=0;$i< $_SESSION['room_count']; $i++)
		 {
			  ?>
    <div id="r-box">
    	<div class="mid-txt" style="margin:10px 5px 5px 15px;">Room <?php echo $i+1; ?>: </div>
    </div>
     <?php
		//for($j=0;$j<  $room_info[$i]->adult; $j++)
		for($j=0;$j<  $_SESSION['org_adult'][$i]; $j++)
		{
		?>
     <table align="left" width="670" border="0" cellspacing="5" cellpadding="5" class="sum-txt" style=" margin-top:15px; border:1px #227fb0 solid; border-radius:10px;">
      
      <tr>
        <td width="70">Salutation *</td>
        <td width="220">First Name</td>
        <td width="220">Last Name</td>
        <!--<td>Max Persons</td>-->
      </tr>
      <tr>
        <td> <select name="sal[]" style="width:60px" class="r-txtbox">
                 <option value="Mr">Mr</option>
                 <option value="Mrs">Mrs</option>
                 <option value="Ms">Ms</option>
             </select>
        </td>
            <td> <!--<input type="text" name="fname[]" style="width:200px" class="r-txtbox"/>-->
            
    <div id="suggest">
      <input autocomplete="off" type="text" required name="fname[]" id="keyword<?php echo $j; ?>" onkeyup="suggest(this.value, <?php echo $j; ?>);" onblur="lookup(this.value, <?php echo $j; ?>);" class="r-txtbox" style="width:200px; position:relative;z-index:100;float:left;display:inline;"/>
      <div style="width:auto;display:inline;position:absolute;margin-left:-423px;margin-top:55px;">
      <div class="suggestionsBox suggestionsBox_div" id="suggestions<?php echo $j; ?>" style="display: none;"> 
          <img src="https://stayaway.com/images/arrow.png" style="position:relative; top:-12px;left:5px;" alt="upArrow" />
          <div class="suggestionList" id="suggestionsList<?php echo $j; ?>"> &nbsp; </div>
      </div>
      </div>
   </div>
            
            
            </td>
            <td>
           <!-- <input style="width:200px" type="text" name="lname[]" class="r-txtbox"/>-->
            
   <div id="suggest">
      <input autocomplete="off" type="text" required name="lname[]" id="keyword1<?php echo $j; ?>" onkeyup="suggest1(this.value, <?php echo $j; ?>);" onblur="lookup1(this.value, <?php echo $j; ?>);" class="r-txtbox" style="width:200px; position:relative;z-index:100;float:left;display:inline;"/>
      <div style="width:auto;display:inline;position:absolute;margin-left:-423px;margin-top:55px;">
      <div class="suggestionsBox suggestionsBox_div" id="suggestions1<?php echo $j; ?>" style="display: none;"> 
          <img src="https://stayaway.com/images/arrow.png" style="position:relative; top:-12px;left:5px;" alt="upArrow" />
          <div class="suggestionList" id="suggestionsList1<?php echo $j; ?>"> &nbsp; </div>
      </div>
      </div>
   </div>
   </td>
    <!--<td><?php echo $room_info[$i]->adult; ?> guests</td>-->
      </tr>
    </table>
     <?php
		  }
	?>
    <?php
    }
	?>
    
    
    
    <div style="float:left; margin-top:50px;"><input type="image" src="https://stayaway.com/images/contiu-but.png" width="100" height="35" /></div>
</form>
			</div>

		</div>
	</div>
	<script src="https://maps.google.com/maps?file=api&v=2&key=ABQIAAAApz8aTXS5eUyxvs5uMszdKRfgfgRgqqCDjpPIuqwLUuHujN8I3D2s4RShDFoZ233PbhiKTfM2Mr6LzhnYEA" type="text/javascript"></script>
                 
		<script type="text/javascript">
                //<![CDATA[
                function mapLoad() {
                    if (GBrowserIsCompatible()) {
                        var map = new GMap2(document.getElementById("map"));
                        var point = new GLatLng(<?php print $hotel[0]->latitude; ?>,<?php print $hotel[0]->longitude;; ?>);
                        map.setCenter(new GLatLng(<?php print $hotel[0]->latitude; ?>,<?php print $hotel[0]->longitude;; ?>),16);
                        var marker = new GMarker(point);
                        map.addOverlay(marker);
                        map.addControl(new GSmallMapControl());
                        map.addControl(new GMapTypeControl());
                    }
					panoClient = new GStreetviewClient();
					panoClient.getNearestPanorama(new GLatLng(<?php print $hotel[0]->latitude; ?>,<?php print $hotel[0]->longitude;; ?>),function(a){

						if (a.code == 200){			 
							var fenwayPark = new GLatLng(<?php print $hotel[0]->latitude; ?>,<?php print $hotel[0]->longitude;; ?>);
							  panoramaOptions = { latlng:fenwayPark };
							  myPano = new GStreetviewPanorama(document.getElementById("pano"), panoramaOptions);
							  GEvent.addListener(myPano, "error", handleNoFlash);
						}
					});
					handleNoFlash = function (errorCode) {
						if (errorCode == '603') {
							return;
						}
					}
                    window.focus();
                }
          </script>         
          <script language="JavaScript" type="text/javascript">
				onload = mapLoad;
				onunload = GUnload;
          </script>  

		<div id="map_container" style="position: fixed;
float: left;
padding: 20px;
top: 150px;
z-index:99999;
margin-left: 0;
display:none;left: 335px;
background-color: #B9B9B9;"><div id="map" style="width: 560px; height:250px;margin-bottom:5px">Not Available</div></div>
		<!--<div id="pano" style="width: 711px; height:250px;margin-bottom:5px"></div>-->
		   <?php
$this->load->view('new-look/footer-inside'); ?>
         </div>

		
	<!-- END #wrapper -->
	
	
	<!-- END #background-wrapper -->
	</div>
	
	<!-- JavaScript -->
	
	<?php
		//echo "<pre>"; print_r($hotel);
		// echo $hotel[0]->api;
	?>
<!-- END body -->
<div id="overlay" style="top: 0;
width: 100%;
height: 100%;
z-index: 9999;
position: fixed;
display:none;
background-color: black;
opacity: .6;"></div>
</body>
</html>