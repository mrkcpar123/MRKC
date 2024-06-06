<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='info@https://github.com/mrkcpar123/kcGRAPHICS.github.io'

$email_subject='new form submission'

$email_body="User Name: $name.\n".
          "User Email: $visitor_email.\n".
           " Subject: $subject.\n".
           "User message:$message.\n";

           $to='killergaps20@gmail.com';
           $headers="From: $email_from \r\n";
           $headers .="Reply-To: $visitor_email\r\n";

           mail($to,$email_subject,$email_body,$headers);
           header("location:contact.html");
?>
