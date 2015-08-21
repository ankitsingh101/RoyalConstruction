<?php
$sendTo = "ankitsingh.udaipur@gmail.com";
$subject = "Royal Construction";
$headers = "From: " . $_REQUEST["sender"].";";
$headers .= "Reply-To: " . $_POST["email"].";";
$headers .= "Return-path: " . $_POST["email"].";";
$message = "Name = ".$_REQUEST["sender"] ."\n"."E-mail=". $_POST["email"]."\n"."Phone= 91+". $_REQUEST["phone"]."\n" ."Message = ". $_REQUEST["message"];
mail($sendTo, $subject, $message, $headers);
?>

   
 
