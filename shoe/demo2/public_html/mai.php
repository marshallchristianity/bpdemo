<form id="contact-form" name="form1" action="#" method="post" enctype="multipart/form-data">

 
			<?php
			if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']))
			{
			if($_POST['name'] !="" && $_POST['email'] != "" && $_POST['message']!= "")
			{
 
		   // Email address to which you want to send email
			$to =  ",";
 
			$subject = $_POST["subject"];
			$message = nl2br($_POST["message"]);
 
			/*********Creating Uniqid Session*******/
 
			$txtSid = md5(uniqid(time()));
 
			$headers = "";
			$headers .= "From: ".$_POST["name"]."<".$_POST["email"].">\nReply-To: ".$_POST["email"]."";
 
			$headers .= "MIME-Version: 1.0\n";
			$headers .= "Content-Type: multipart/mixed; boundary=\"".$txtSid."\"\n\n";
			$headers .= "This is a multi-part message in MIME format.\n";
 
			$headers .= "--".$txtSid."\n";
			$headers .= "Content-type: text/html; charset=utf-8\n";
			$headers .= "Content-Transfer-Encoding: 7bit\n\n";
			$headers .= $message."\n\n";
 
			/***********Email Attachment************/
			if($_FILES["attachment"]["name"] != "")
			{
			$txtFilesName = $_FILES["attachment"]["name"];
			$txtContent = chunk_split(base64_encode(file_get_contents($_FILES["attachment"]["tmp_name"]))); 
			$headers .= "--".$txtSid."\n";
			$headers .= "Content-Type: application/octet-stream; name=\"".$txtFilesName."\"\n"; 
			$headers .= "Content-Transfer-Encoding: base64\n";
			$headers .= "Content-Disposition: attachment; filename=\"".$txtFilesName."\"\n\n";
			$headers .= $txtContent."\n\n";
			}
 
			// @ is for skiping Errors //
			$flgSend = @mail($to,$subject,null,$headers);  
 
			if($flgSend)
			{
			echo "Email Sent SuccessFully.";
			}
			else
			{
			echo "Error in Sending Email.";
			}

			}
			else
			{
			echo "<font color=red>* No field can be blank</font>";
			}		  

			}
 
			?>
			
			<table cellpadding=10px cellspacing=10px width=60%><tr><td>
                  <span class="text-form">Name:</span></td><td>
                    <input name="name" type="text" /></td></tr><tr><td>
 
                     <span class="text-form">Email:</span></td><td>
                    <input name="email" type="text" /></td></tr><tr><td>
 
                 <span class="text-form">Subject:</span></td><td>
                    <input name="subject" type="text" /></td></tr><tr><td>
 
 
                    <div class="text-form">Message:</div></td><td>
                    <textarea name="message"></textarea></td></tr>
 
                    <tr><td>
 
                    <div class="text-form">Attachment:</div></td><td>
                    <input name="attachment" type="file"></td><br><font color=red><br><br><br></font><b>*prefer '.pdf','.xls' files as attachment</b><br><br> Or<br><br> else you can directly mail at<b>tes@gmail.com</b></tr>
 
                    <tr><td></td><td>
 
                  <div id="button1"><a class="button-2" onclick="document.form1.submit()"  ><b>Send</b></a>  
 
                  </div>
				  </td></tr></table>
				  
 
              </form>