<?php

//echo phpinfo();	
ini_set("smtp_server","smtp.gmail.com");
ini_set("smtp_port","587");
ini_set("smtp_ssl","tls");
ini_set("auth_username","pritanikeshav52@gmail.com");
ini_set("auth_password","knp9724426259");
//ini_set("sendmail_path","C:\\xampp\\sendmail\\sendmail.exe -t -i");
ini_set('sendmail_from', 'pritanikeshav52@gmail.com');          

$to = "keshav.pritaniszxmen@gmail.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "pritanikeshav52@gmail.com";
$headers = "From:" . $from;
if ( mail($to,$subject,$message,$headers))
	echo "Mail Sent.";
else
	echo "Mail not sent";


?>