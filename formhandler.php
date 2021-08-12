<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@domain name';

$email_subject = 'message'

$email_body = "User Name: $name.\n";
               "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User message: $message.\n";   


$to = 'personal email id';

$headers = "From: $email_form\r\n";

$headers .= "Reply-To : $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");



?>