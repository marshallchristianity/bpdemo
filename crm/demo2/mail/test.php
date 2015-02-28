<?php
$body = $_POST['post_description']; 
print_r($_POST); exit;
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'PHPMailerAutoload.php';
include ("db.php");

$id_str="";
foreach($_POST['check_list'] as $id)
{
	$id_str .=$id.",";
}
 $id_str .="''";
//retrieve data from database
 $sql="select * from autocomplete where id in($id_str)";
 $result=mysqli_query($link, $sql);
 while($row=mysqli_fetch_array($result))
 {

//Create a new PHPMailer instance
$mail = new PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "lvijetha90@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "ganesha@8050";

//Set who the message is to be sent from
$mail->setFrom('lvijetha90@gmail', 'vijetha');

//Set an alternative reply-to address
$mail->addReplyTo('lvijetha90@gmail', 'vijetha');
$email =$row['email'];
$mail->addAddress($email);
//Set the subject line
$mail->Subject = $_POST['mail_subject'];

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
$mail->msgHTML($body);
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
$mail->addAttachment('mail/phpmailer_mini.png');

//send the message, check for errors
if($mail->send()){
header("location:http://localhost/crm_demo/student.php");
}
}


?>

