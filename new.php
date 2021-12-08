<?php 
 $to = "weblankcanvas@gmail.com";
 $subject = "enquiry"; 
 $name = $_POST['name'];
 $email = $_POST['email']; 
 $phone = $_POST['phone'];  
 $message = $_POST['message']; 
 $headers = "From: $email"; $headers1 = "Name: $name \n Email: $email \n Phone: $phone \n  Messages: $message ";
 $sent = mail($to, $subject, $headers1 ,$headers ) ; 
 if($sent) { header ("Location:websitedevelopmentchennai_blankcanvas_newsletter.html"); 
 } 
 else 
 {print "We encountered an error sending your mail"; } 
 ?>