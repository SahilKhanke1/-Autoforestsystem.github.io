<?php
  if(isset( $_POST['name']))
  $name = $_POST['name'];

  if(isset( $_POST['email']))
  $email = $_POST['email'];

  if(isset( $_POST['country']))
  $message = $_POST['country'];
  
  if(isset( $_POST['contactno']))
  $subject = $_POST['contactno'];

  if(isset( $_POST['arrival']))
  $subject = $_POST['arrival'];

  if(isset( $_POST['persion']))
  $subject = $_POST['persion'];
  
  if(isset( $_POST['subject']))
  $subject = $_POST['subject'];

  if(isset( $_POST['message']))
  $message = $_POST['message'];

  $content="From: $name \n Email: $email \n Message: $message";
  $recipient = "rimanshukumbhare868@gmail.com";
  $mailheader = "From: $email \r\n";
  mail($recipient, $subject, $content, $mailheader) or die("Error!");
  echo "Email sent!";
  
?>