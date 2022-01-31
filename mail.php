<?php
$name = $_POST['name'];
$visitir_email= $_POST['email'];
$number= $_POST['mobile'];
$message= $_POST['message'];

$email_from = 'noreply@gmail.com';

$email_subject = "Mail From Portfolio";

$email_body ="User Name = $name.\n".
             "User Email = $visitor_email.\n".
             "User Number = $number.\n".
             "User Message = $message.\n";

$to = "ramcsbhargav505@gmail.com";
    
$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location:index.html");
?>