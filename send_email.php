<?php
 	$name = $_POST["name"];
 	$email = $_POST["email"];

 	$formcontent=" From: $name \n Email: $email";
	$recipient = "";
	$subject = "Contact Form";
	$mailheader = "From: $email \r\n";
	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	echo "Thank You!" ;
?>