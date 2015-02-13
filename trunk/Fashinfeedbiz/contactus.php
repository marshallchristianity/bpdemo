<?php
	include('includes/header.php');
?>
    <script type="text/javascript" src="js/contactusvalidation.js" ></script>
	 <script type="text/javascript" src="js/contactusvalidation2.js" ></script>
<style type="text/css">
.captcha2{
border:none;
height:80px;
border-right:none;
}
.normaltextbox{
    width: 250px !important;
    display: block;
    margin-bottom: 10px;
	height:30px;
}
</style>
<!-- Main -->
<div id="main">
  <div class="shell">
    
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="height:400px;">
  <tr>
    <td width="480" align="left" valign="middle" class="rightborder">
    <table width="90%" border="0" align="left" cellpadding="0" cellspacing="0" >
  <tr>
  
 
  
    <td align="center" valign="top"><h1 style="color:#006666;margin-right:100px;">Send Enquiry</h1>
      <form  method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return validateform();">
	<table width="100%" height="125" border="0" align="center" cellpadding="4" cellspacing="0" class="cform">
         
		<tr>
		  <td align="center" valign="bottom" style="width:200px;padding-bottom: 20px;"><b>I am:</b> </td><td align="left">
		    <?php
if(isset($_REQUEST['submit'])){ 

		$type =$_POST['cat'];
		$name =$_POST['name'];
        $orgname =$_POST['orgname'];
        $to =$_POST['email'];
		$phone =$_POST['phone'];
		$phone2=$_POST['phone2'];
		$location=$_POST['location'];
		$cbday=$_POST['dte'];
	    $time=$_POST['tme'];
		 $findit=$_POST['findit'];
		
		if(isset($_POST['tchk'])){
		$a=$_POST['tchk'];
		$a.='<br>';
		}
		else{
        $a='';
		}	
		if(isset($_POST['pchk'])){
		$b=$_POST['pchk'];
		$b.='<br>';
		}
		else{
        $b='';
		}	
	    if(isset($_POST['ppchk'])){
		$c=$_POST['ppchk'];
		$c.='<br>';
		}
	    else{
        $c='';
		}	
	    if(isset($_POST['rchk'])){
		$d=$_POST['rchk'];
		$d.='<br>';
		}
		else{
        $d='';
		}	
	    if(isset($_POST['achk'])){
		$e=$_POST['achk'];
		$e.='<br>';
		}
		else{
        $e='';
		}	
	    $message ="<html><body><table>
		              <tr><td align='right'><b>Category Type:</b></td><td align='left'>".$type."</td></tr>
					  <tr><td align='right'><b>Name:</b></td><td align='left'>".$name."</td></tr>
					  <tr><td align='right'><b>Organisation:</b></td><td align='left'>".$orgname."</td></tr>
					  <tr><td align='right'><b>Email:</b></td><td align='left'>".$to."</td></tr>
				      <tr><td align='right'><b>Phone:</b></td><td align='left'>".$phone."</td></tr>
				      <tr><td align='right'><b>Alternate:</b></td><td align='left'>".$phone2."</td></tr>
				      <tr><td align='right'><b>Location:</b></td><td align='left'>".$location."</td></tr>
					  <tr><td align='right' valign='top'><b>Requirements:</b></td><td align='left'>".$a.$b.$c.$d.$e."</td></tr>
					  <tr><td align='right'><b>Call Back Date:</b></td><td align='left'>".$cbday."&nbsp;&nbsp;&nbsp;&nbsp; Time : ".$time."</td></tr>
					
					   <tr><td align='right'><b>How do you know us ? :</b></td><td align='left'>".$findit."</td></tr>
				  </table></body></html>";

		$subject="Fashinfeedbiz Enquiry Form";
		
		 //for admin
		$from="lvijetha90@gmail.com";
		$headers="From:$to";
		$headers.="\r\n";
		$headers.="Content-Type:text/html";
		$headers.="\r\n";

		//for user
		$headers1="From:$from";
		$headers1.="\r\n";
		$headers1.="Content-Type:text/html";
		$headers1.="\r\n";
	      
		if(mail($from,$subject,$message,$headers)&&mail($to,$subject,$message,$headers1)){
			 echo "<div class='green'>Sucessfully Submitted</div>";
		}
	    else{
		   echo "<h3><div class='red'>There was an Error</div></h3>";
		}
}

?>
		    <br /> 
		    &nbsp;&nbsp;
   		<select id="cat" name="cat" class="normaltextbox" >
         <option value="" label="">Select One</option>
        <option value="Corporate" label="Corporate">Corporate</option>
        <option value="Individual" label="Individual">Individual</option>
        </select></td></tr>
    <tr><td align="center" style="width:200px;"><strong>Name* :</strong></td><td align="left">
    <input type="text" value="" id="name"  name="name" class="normaltextbox"></td></tr>
	
	<tr><td align="center" style="width:200px;"><strong>Email* : </strong></td><td align="left">
    <input type="text" value="" id="email" name="email" class="normaltextbox"></td></tr>
	<tr><td align="center" style="width:200px;"><strong>Phone:</strong></td><td align="left">
    <input type="text" value="" id="phone" name="phone" class="normaltextbox"></td></tr>

	  <td align="center" style="width:200px;"><strong>How do you know us? :</strong></td>
	  <td align="left">
	    <select id="findit" name="findit" class="normaltextbox" >
        <option value="" selected="selected" label="">Select One</option>
        <option value="Web Search" >Web Search</option>
        <option value="Print Media" >Print Media</option>
          <option value="Reference" >Reference</option>
             <option value="Others" >Others</option>
            </select></td>
	  </tr>
	
    <tr>
	<td align="center" valign="top" style="padding-top:18px;width:200px;"><strong>Validation code* :</strong></td>
	<td align="left">
    <iframe src="captcha.php" class="captcha2" align="left" name="ifcap" id="ifcap" scrolling="no"></iframe>
    </td></tr>
	<tr><td align="right">&nbsp;</td><td align="left">Enter the code above here<br />
    <input id="6_letters_code" name="6_letters_code" type="text"></td></tr>
    <tr>
	  <td align="center">&nbsp;</td>
	  <td align="left">&nbsp;&nbsp;
	    <input type="submit" name="submit" id="submit" value="submit" class="button"/></td>
	</tr>
	<tr><td align="center" colspan="2">&nbsp;</td></tr>
</table>
</form>





	
		</p>
</td>
  </tr>

</table>
</td>
<form>
    
    <td width="150" align="left" valign="middle"><table width="100%" border="0" align="right" cellpadding="0" cellspacing="0"><br/>
	
      <tr>
	 
   <td  style="width:100%;padding-top:px;padding-left:10px">
	  <h2>Contact Us </h2>
	
  <b>Feedbiz Solutions India Pvt. Ltd.</b>
	<p> Bangalore, India<br/>
Phone : +91 98806 72068<br/>
email : info-INDIA@fashinfeedbiz.com
        
		</p>
	</td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	    <td style="width:100%"></td>
		<td style="width:100%"></td>
		<td style="width:100%"></td>
		<td style="width:100%"></td>
		<td style="width:100%"></td>
		<td style="width:100%"></td>
		<td style="width:100%"></td>
		<td style="width:100%"></td>
		
		
		<td style="width:100%;padding-top:90px;padding-left:50px" >
		<h4 style="color:green"></h4>
			
		
		</td>
	 </tr>
				
		<tr>
        <td  style="width:100%;padding-top:top;padding-left:10px">
		<h4 style="color:green"></h4>
		<b>Alfashin Management Services Pvt. Ltd.,</b>
	<p align="justify">
Chennai, India <br/>
Phone: +91 97898 55830<br/>
Email:info-INDIA@fashinfeedbiz.com
 
		</p>
		
		
		</td>
		</tr>
		
		<tr>
		
		<td  style="width:100%;padding-top:10px;padding-left:10px">
		
				<b>Fashin Technologies FZE, UAE  </b>
	<p>Dubai <br/>
	Phone: +971 5537 40303<br/>
	Email: info-UAE@fashinfeedbiz.com 
</b>
		</p>
		
		</td>
		</tr>
		
	



		
		
		   
			
			
        </td>
      </tr>
    </table>

  </tr>
</table>
     
  </div>
</div>
<!-- /Main -->

<!-- Footer -->

<?php
include('includes/footer.php');
?>