<?php
$to_email = "atlalucky@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi,nn This is test email send by PHP Script";
$headers = "From: pantr710@gmail.com";
if (mail($to_email, $subject, $body, $headers)) 
	{
		echo "Email successfully sent...";
	} 
	else 
	{
		echo "Email sending failed...";
	}
?>

