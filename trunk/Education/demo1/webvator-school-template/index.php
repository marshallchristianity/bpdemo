<html><head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
 <meta name="description" content= "Web Educational Hub" />
   <meta name="keywords" content= "free school website" />
   
<title>High school Templates</title>
<link href="css/webvator.css" rel="stylesheet" type="text/css">

<style type="text/css">
<!--
#navigation a {
	font:11px Arial, Helvetica, sans-serif;
	color: #ffffff;
	text-decoration: none;
	letter-spacing:.1em;
	line-height:16px;
	display:block;
	padding: 0px 10px;
	border-right-width: 1px;
	border-right-style: solid;
	border-right-color: #ffffff;
	}
	
#navigation a:hover {
	color:#106C21;
	background-image:url(images/hover-gif.gif);
	font-size:12px;
		
	}
	
.search_bg {
	background-image: url(images/search_bg.gif);
	width:292px;
	height:202px;
}

.menu {
	height: 33px;
	width: 2px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	
}

	
.top_nav_text_first	
{
	FONT-WEIGHT: normal;
    FONT-SIZE: 9pt;
    COLOR: #000000;
    FONT-FAMILY: Verdana;
	vertical-align:top;
	line-height:24px;
	display:block;
	padding: 0px 10px;
	border-right-width: 1px;
	border-right-style: solid;
	border-right-color: #000000;	
}

.top_nav_text_last	
{
	FONT-WEIGHT: normal;
    FONT-SIZE: 9pt;
    COLOR: #000000;
    FONT-FAMILY: Verdana;
	vertical-align:top;
	line-height:24px;
	display:block;
	padding: 0px 10px;

}

	
.top_nav_text_white A:link {color: #000000; font-weight:normal; text-decoration: underline}
.top_nav_text_white A:visited {color: #000000;  font-weight:bold; text-decoration: underline}
.top_nav_text_white A:active {color: #000000; font-weight:bold; text-decoration: none}
.top_nav_text_white A:hover {color: #000000; font-weight:bold; text-decoration: none;}

#navigation a:hover {
	color:#106C21;
	background: #ffffff;
	}
	
#padding {
	padding:5px;
	}

body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}

.time {
	color: #FFFFFF;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
}

.textfieldLabel {
	FONT-WEIGHT: 200;
	FONT-SIZE: 11px;
	COLOR: #ffffff;
	FONT-FAMILY: Arial, Helvetica, sans-serif;
	list-style-image: url(images/cmn/blt.gif);
	word-spacing: 1px;
}
-->
</style>

<style type="text/css">



#pscroller1{
width: 280px;
height: 60px;
border: 1px solid WHITE;
font-family:Arial, Helvetica, sans-serif;
font-size:12px;
}



.someclass{ //class to apply to your scroller(s) if desired
}
</style>

<script type="text/javascript">


var pausecontent=new Array()
pausecontent[0]='<a href="#">School party</a><br />Sed at elit non est auctor lobortis sed nec turpis. Vivamus nec odio eget lacus semper u'
pausecontent[1]='<a href="#">Best students</a><br />Sed at elit non est auctor lobortis sed nec turpis. Vivamus nec odio eget lacus semper u.'
pausecontent[2]='<a href="#" target="_new">News! News! News!</a><br />Watch out for regular updates every hour.'


</script>

<script type="text/javascript">
function pausescroller(content, divId, divClass, delay){
this.content=content 
this.tickerid=divId
this.delay=delay 
this.mouseoverBol=0 
this.hiddendivpointer=1 
document.write('<div id="'+divId+'" class="'+divClass+'" style="position: relative; overflow: hidden"><div class="innerDiv" style="position: absolute; width: 100%" id="'+divId+'1">'+content[0]+'</div><div class="innerDiv" style="position: absolute; width: 100%; visibility: hidden" id="'+divId+'2">'+content[1]+'</div></div>')
var scrollerinstance=this
if (window.addEventListener) 
window.addEventListener("load", function(){scrollerinstance.initialize()}, false)
else if (window.attachEvent) 
window.attachEvent("onload", function(){scrollerinstance.initialize()})
else if (document.getElementById) 
setTimeout(function(){scrollerinstance.initialize()}, 500)
}



pausescroller.prototype.initialize=function(){
this.tickerdiv=document.getElementById(this.tickerid)
this.visiblediv=document.getElementById(this.tickerid+"1")
this.hiddendiv=document.getElementById(this.tickerid+"2")
this.visibledivtop=parseInt(pausescroller.getCSSpadding(this.tickerdiv))

this.visiblediv.style.width=this.hiddendiv.style.width=this.tickerdiv.offsetWidth-(this.visibledivtop*2)+"px"
this.getinline(this.visiblediv, this.hiddendiv)
this.hiddendiv.style.visibility="visible"
var scrollerinstance=this
document.getElementById(this.tickerid).onmouseover=function(){scrollerinstance.mouseoverBol=1}
document.getElementById(this.tickerid).onmouseout=function(){scrollerinstance.mouseoverBol=0}
if (window.attachEvent)
window.attachEvent("onunload", function(){scrollerinstance.tickerdiv.onmouseover=scrollerinstance.tickerdiv.onmouseout=null})
setTimeout(function(){scrollerinstance.animateup()}, this.delay)
}


 -------------------------------------------------------------------

pausescroller.prototype.animateup=function(){
var scrollerinstance=this
if (parseInt(this.hiddendiv.style.top)>(this.visibledivtop+5)){
this.visiblediv.style.top=parseInt(this.visiblediv.style.top)-5+"px"
this.hiddendiv.style.top=parseInt(this.hiddendiv.style.top)-5+"px"
setTimeout(function(){scrollerinstance.animateup()}, 50)
}
else{
this.getinline(this.hiddendiv, this.visiblediv)
this.swapdivs()
setTimeout(function(){scrollerinstance.setmessage()}, this.delay)
}
}



pausescroller.prototype.swapdivs=function(){
var tempcontainer=this.visiblediv
this.visiblediv=this.hiddendiv
this.hiddendiv=tempcontainer
}

pausescroller.prototype.getinline=function(div1, div2){
div1.style.top=this.visibledivtop+"px"
div2.style.top=Math.max(div1.parentNode.offsetHeight, div1.offsetHeight)+"px"
}


pausescroller.prototype.setmessage=function(){
var scrollerinstance=this
if (this.mouseoverBol==1) 
setTimeout(function(){scrollerinstance.setmessage()}, 100)
else{
var i=this.hiddendivpointer
var ceiling=this.content.length
this.hiddendivpointer=(i+1>ceiling-1)? 0 : i+1
this.hiddendiv.innerHTML=this.content[this.hiddendivpointer]
this.animateup()
}
}

pausescroller.getCSSpadding=function(tickerobj){ 
if (tickerobj.currentStyle)
return tickerobj.currentStyle["paddingTop"]
else if (window.getComputedStyle) 
return window.getComputedStyle(tickerobj, "").getPropertyValue("padding-top")
else
return 0
}

</script>

</head>
	
	
<body>	
	<table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
		<tbody><tr>
			<td colspan="3" width="50%"></td>
			<td>
				<table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
				  <tbody><tr><td height="50%"></td></tr>
					<tr>
						<td align="left" valign="top">
			  <table align="left" border="0" cellpadding="0" cellspacing="0" height="100%" width="970">
								<tbody><tr>
									<td colspan="3" valign="top"><table width="970" border="0" cellpadding="0" cellspacing="0">
	<tbody><tr>
		<td width="921" align="left" valign="top"><strong><img src="images/webvator-slice2.png" width="968" height="221" alt="webvator.com"></strong></td>
	</tr>
	<tr class="menu" bgcolor="#003173">
    	<td colspan="2">
		<div align="center">
      		<table id="navigation" align="center" border="0" cellpadding="0" cellspacing="0">
		        <tbody><tr>
        	  		<td class="navText" align="center" bgcolor="#0072C8" nowrap="nowrap"><strong><a href="./">HOME</a></strong></td>
          			<td class="navText" align="center" nowrap="nowrap"><strong><a href="">ABOUT US</a></strong></td>
          			<td class="navText" align="center" nowrap="nowrap"><strong><a href="#">ACTIVITIES</a></strong></td>						
          			<td class="navText" align="center" nowrap="nowrap"><strong><a href="#">CURRICULUM</a></strong></td>
          			
		  			<td class="navText" align="center" nowrap="nowrap"><strong><a href="#">STUDENTS </a></strong></td>
					<td class="navText" align="center" nowrap="nowrap"><strong><a href="#">TEACHERS</a></strong></td>
		  			<td class="navText" align="center" nowrap="nowrap"><strong><a href="#">APPY</a></strong></td> 
		  			<td class="navText" align="center" nowrap="nowrap"><strong><a href="#">MEDIA</a></strong></td> 
		  			<td class="navText" align="center" nowrap="nowrap"><strong><a href="#">BLOG</a></strong></td> 
		  			<td class="navText" align="center" nowrap="nowrap"><strong><a href="#">PHOTOS</a></strong></td> 
								 
        		</tr>
			</tbody></table>
		</div>
		</td>
	</tr>
</tbody></table>  
                                      <strong>
                                      <script src="js/urchin.js" type="text/javascript">
                                      </script>
                                      <script type="text/javascript">
_uacct = "UA-3063738-10";
urchinTracker();
                                      </script>
                                  </strong></td>
								</tr>
								<tr>
									<td style="border-left: 1px solid rgb(16, 108, 33);" align="left" background="images/rightbg.jpg"  valign="top" width="203">
<table align="left" border="0" cellpadding="0" cellspacing="0">
	<tbody><tr>
		<td>
			<table align="center" border="0" cellpadding="0" cellspacing="1" width="100%">
				<tbody><tr><td height="2"></td></tr>
				<tr>
					<td style="border: 1px solid rgb(208, 208, 198);" width="180">
						<div id="calendarDiv" name="calendarDiv" style="width:180px;">	
	<table id="Table3" align="center"  border="0" cellpadding="2" cellspacing="0" width="180">
		<tbody><tr>
		  <td align="center"><strong>School Photo Gallery</strong></td>
		</tr>
	</tbody></table>
	
	                    </div></td>
				</tr>
				<tr><td height="2"></td></tr>
				<tr>
					<td style="border: 1px solid rgb(208, 208, 198);" bgcolor="#FFFF9F" width="180"><strong><a href="./"><marquee direction="down"><img src="images/webvator-slice9.jpg" width="182" height="121" border="0"></marquee></a>
						</strong>
					  <table  align="center" border="0" cellpadding="1" cellspacing="0" width="100%">
					    <tbody><tr>
					      <td align="center"><strong>Follow us on Facebook</strong></td>
					      </tr>
					      <tr><td height="10">
					        <div class="fb-like-box" data-href="http://www.facebook.com/bigperl" data-width="182"  data-height="300"  data-show-faces="true" data-stream="false" data-header="false"></div>
					        </td></tr>
					      </tbody></table>
					</td>
				</tr>
				
				
				

				
			</tbody></table>
		</td>
	</tr>
</tbody></table>  
</td>
									<td valign="top">
										<strong>
										
										</strong>
										<table align="center" border="0" cellpadding="0" cellspacing="0" width="645">
											
											<tbody><tr>
												<td class="border_left_right_box">
													<table align="left" border="0" cellpadding="0" cellspacing="2">
														<tbody><tr><td height="3"></td></tr>
														
														<tr>
															<td><strong><img src="images/webvator-slice1.jpg" style="border: 1px solid rgb(204, 204, 204);" height="197" width="260"></strong></td>
														  <td width="3"></td>
															<td valign="top">
																<table align="center" border="0" cellpadding="0" cellspacing="2">
																	<tbody><tr>
																	  <td class="home_page_main_article_heading" valign="top" style="color:#106C21"><strong> School Website</strong></td>
																	</tr>
																	<tr><td height="20"></td>
																	</tr><tr><td class="home_page_main_article_content" valign="top">Our School saw the light of day in August  1961 and has consistently made strides in excellence and perfection in every field,  be it academics, values, sports, social service, cultural activities, personality grooming…..hence the entire city joined  in the  rejoicing  when OLF  touched its Golden Milestone in 2011.  The very air seemed to be ringing congratulations galore from nostalgic ex-students and excited current students, from grateful parents and even from overawed onlookers.</td>
																	</tr>
																	<tr>
																	  <td class="read_more">
																	  <strong><a class="read_more" href="#" title="Full Story">Read More																	</a></strong></td>
																	</tr>																	
																</tbody></table>
															</td>
														</tr>																															
																												
													</tbody></table>
													
												</td>
											</tr>
											
											
											
											<tr>
												<td class="border_left_right_box" bgcolor="#EAEAE0">
													<table align="center" border="0" cellpadding="0" cellspacing="2">
														<tbody>
														<tr>
															<td style="padding-top:10PX;" ><strong>
															  <script type="text/javascript">



new pausescroller(pausecontent, "pscroller1", "someclass", 3000)
document.write("<br />")</script>
															</strong></td>
														  <td width="30"></td>
															<td ><strong><img src="images/SAY.jpg" width="292" height="80"></strong></td>
														</tr>
														
												  </tbody></table>
												</td>
											</tr>
											
											
											
											<tr>
												<td class="border_left_right_bottom_box" bgcolor="#ffffff">
													<table align="left" border="0" cellpadding="5" cellspacing="0">
														<tbody><tr>
															<td width="3"></td>
															<td class="highlights_box">
																<table align="left" border="0" cellpadding="5" cellspacing="0">
																	<tbody><tr>
																	  <td class="heading_black" colspan="2"><strong>Updates</strong></td>
																	</tr>
																	
																	<tr>
																		<td><strong><img src="images/webvator-slice6.jpg" style="border: 1px solid rgb(204, 204, 204);"></strong></td>
																  <td class="text_black">
																			<table align="left" border="0" cellpadding="0" cellspacing="0">
																				<tbody><tr><td class="home_list_heading"><strong> work</strong> <br>
																				  We have world class faculty of teachers who create or work on your futures..</td>
																				</tr>
																				<tr><td class="home_list_centent">&nbsp;</td>
																				</tr>
																				<tr>
																				  <td class="read_more">
																			      <strong><a class="read_more" href="update1.html" title="Full Story">Read Here</a> </strong></td>
																				</tr>
																				
																			</tbody></table>
																		</td>
																	</tr>																	
																	
																	<tr>
																		<td><strong><img src="images/webvator-slice5.jpg" style="border: 1px solid rgb(204, 204, 204);"></strong></td>
																  <td class="text_black">
																			<table align="left" border="0" cellpadding="0" cellspacing="0">
																				<tbody><tr><td class="home_list_heading"><strong>New School rules</strong><br>We have always belive in rules and follow the rules</td>
																				</tr>
																				<tr><td class="home_list_centent">&nbsp;</td>
																				</tr>
																				<tr>
																				  <td class="read_more">
																			      <strong><a class="read_more" href="update2.html" title="Full Story">Read Here</a> </strong></td>
																				</tr>
																				
																			</tbody></table>
																		</td>
																	</tr>																	
																	
																	<tr>
																		<td><strong><img src="images/webvator-slice4.jpg" style="border: 1px solid rgb(204, 204, 204);"></strong></td>
																  <td class="text_black">
																			<table align="left" border="0" cellpadding="0" cellspacing="0">
																				<tbody><tr><td class="home_list_heading"><strong>School Activity</strong><br>School oraganise partyes or social activities for student</td>
																				</tr>
																				<tr><td class="home_list_centent">&nbsp;</td>
																				</tr>
																				<tr>
																				  <td class="read_more">
																			      <strong><a class="read_more" href="#" title="Full Story">Read Here</a> </strong></td>
																				</tr>
																				
																			</tbody></table>
																		</td>
																	</tr>																	
																	
																</tbody></table>
															</td>
															<td width="10"></td>
															<td class="what_on_in_kampala_box">
																<table align="left" border="0" cellpadding="5" cellspacing="0">
																	<tbody><tr>
																		<td class="heading_black" style="text-align: left;"><strong>Campus </strong></td>
																	</tr>
																	
																	<tr>
																		<td><strong><img src="images/webvator-slice7.jpg" width="290"   style="border: 1px solid rgb(204, 204, 204);"></strong></td>
																	  </tr>
																	<tr>
																		<td class="text_black">
																			<table align="left" border="0" cellpadding="0" cellspacing="0">
																				<tbody><tr><td class="home_list_heading">&nbsp;</td>
																				</tr>
																				<tr><td class="home_list_centent">we provide a place where we give a way with tha key of success. you make your future with best things </td>
																				</tr>
																				<tr><td class="read_more">
																				  <strong><a class="read_more" href="#" title="Full Story">Full Story</a>
																				  </strong></td>
																				</tr>
																				
																			</tbody></table>
																		</td>																		
																	</tr>																																
																																		

																</tbody></table>
															</td>
														</tr>
													</tbody></table>
												</td>
											</tr>
																																
										</tbody></table>
										<strong>
										
								    </strong></td>
									<td style="border-right: 1px solid rgb(16, 108, 33);" align="left" valign="top" width="130"><table align="left" border="0" cellpadding="0" cellspacing="0">
	<tbody><tr>
		<td>
			<table align="center" border="0" cellpadding="0" cellspacing="1" width="100%">
				<tbody>
				
				<tr><td height="2"></td></tr>
				<tr>
					<td style="border: 1px solid rgb(208, 208, 198);" width="180">
						<table align="center" border="0" cellpadding="1" cellspacing="0" width="100%">
							<tbody>
							<tr><td align="center"><strong><img src="images/webvator-slice3.jpg" border="0" ></strong></td>
							</tr>
							
						</tbody></table>
					</td>
				</tr>
			</tbody></table>
		</td>
	</tr>
</tbody></table>  
</td>
								</tr>
								<tr>
									<td colspan="3">
									  <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
									    <tbody><tr>
									      <td style="width: 970px; height: 90px; background-color:#069" >
									        <table id="navigation" align="center" border="0" cellpadding="0" cellspacing="0">
									          <tbody><tr>
									            
									            <td width="4" class="text_white"></td>
									            <td width="4" class="text_white"></td>
									            <td width="4" class="text_white"></td>
									            <td width="10"></td>
									            <td width="185" class="text_white">
									              <strong>
									                <script type="text/javascript">
copyright=new Date();
update=copyright.getFullYear();
document.write("Copyright &copy; "+ update + "        High school. All rights reserved.");

                      </script>
								                  <span style="color:#006600; font-weight:bolder"><a href="http://www.bigper.com">created by bigperl</a></span>						
							                    </td>
									            </tr>
							                </tbody></table>
								          </td>
									      </tr>
</tbody></table>  
</td>
								</tr>								
							</tbody></table>						
						</td>
					</tr>
					<tr><td height="50%"></td></tr>
				</tbody></table>
	    </td>
			<td width="50%"></td>
		</tr>
	</tbody></table>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37631291-1']);
  _gaq.push(['_setDomainName', 'webvator.com']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>



 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	</body></html>