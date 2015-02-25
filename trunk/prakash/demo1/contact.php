<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Prakash Engineers and Builders</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<?php include('includes/header.php'); ?>
    <section class="box" style="overflow:auto;">
		<div class="msg_info section_w500">
	        	<h2 style="text-align:center;">Send a message</h2>
				<form action="#" method="post">
					<?php if(isset($_POST['submit'])){
	$login_details="Dear Admin,<br/>

	

	Name:".$_POST['name']." <br/>

	Email:".$_POST['email']."<br/>

	
	Phone:".$_POST['phone']."<br/>
	Message:".$_POST['message']."

	";

	

	$subject =  'Contact Info';

	$bound_text = "Contact Info";

	$bound = "--".$bound_text."\r\n";

	$bound_last = "--".$bound_text."--\r\n";

	$headers = "From: MRB Construction <lvijetha90@gmail.com>\r\n";

	$headers .= "MIME-Version: 1.0\r\n"

  ."Content-Type: multipart/mixed; boundary=\"$bound_text\"";

	$message .= "If you can see this MIME than your client doesn't accept MIME types!\r\n"

	.$bound;

   

	$message .= "Content-Type: text/html; charset=\"iso-8859-1\"\r\n"

	."Content-Transfer-Encoding: 7bit\r\n\r\n"

	.$login_details."\r\n"

	.$bound;



	if(mail('lvijetha90@gmail.com', $subject, $message,$headers)){
	echo "mail sent successfully";
	}else{
	echo "could not send your mail.";
	}
	
} ?>
				<input type="text" name="name" placeholder="*type your name" id="name">
				<input type="text" name="email" placeholder="*type your email" id="email">
				<input type="text" name="phone" placeholder="*type your number" id="phone">
				<textarea name="message" placeholder="*how can we help you?" rows="6" id="message"></textarea>
				<input type="submit" class="contact-submit-btn" value="submit" style="float:left;">
				</form>
      
    	
	</div>
		<div id="side_column">
        
        	<div id="quick_contact" style="color: white;">
            	<h2>Quick Contact </h2><br/>
				<?php $cot = mysqli_query($con,'select *from contact');
					$conts = mysqli_fetch_array($cot); ?>
                <ul class="list" style="list-style:none;">
                	<li><span style="color:#000000;">Tel:</span> <?php echo $conts['phone']; ?></li>
             
                    <li><span style="color:#000000;">Email:</span> <?php echo $conts['email']; ?></li>
					<li style="width: 230px;"><span style="color:#000000;">address:</span> <?php echo $conts['address']; ?></li>
                </ul>            
			</div>
        </div>
		<div class="cleaner" style="padding-top:10px;clear:both;"></div>
			<iframe width="900" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 				src="http://regiohelden.de/google-maps/map_en.php?width=900&height=300&hl=en&q=%22Dandi%20Nilaya%22%2C%2012%20%22A%22%20Cross%20J.P%20Nagar%201st%20Phase%2C%20Bangalore%20+(Prakash%20Engineers%20%26%20Builders)&ie=UTF8&t=&z=14&iwloc=A&output=embed"></iframe>
    </section>

<script>

$(document).ready(function(){
	$(".contact-submit-btn").click(function(){
		var name = $("#name").val();
		var email = $("#email").val();
		var phone = $("#phone").val();
		var message = $("#message").val();
		if(name == ''){
			$("#name").css('border','1px solid red');
			return false; 
		}
		if(email == ''){
			$("#email").css('border','1px solid red');
			return false; 
			
		}else{
			var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			if( !emailReg.test( email ) ) {
			alert("enter valid email id");
				return false;
			  }
		}
		
		if(phone == ''){
			$("#phone").css('border','1px solid red');
			return false; 
		}else{
			 var phoneno = /^[0-9-+]+$/;
			  if (!phoneno.test(phone)) {
			  alert("enter valid Phone No");
					return false;
				}
				
		}
		if(message == ''){
			$("#message").css('border','1px solid red');
			return false; 
		}
	});
});
  
</script>
<?php include('includes/footer.php'); ?>