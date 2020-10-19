<?php
$name = $_POST['Nombre'];
$email = $_POST['Email'];
$type = $_POST['motivo'];
$message = $_POST['mensaje'];
$formcontent=" From: $name \n Type: $type \n Message: $message";
$recipient = "hola@cookiewookies.me";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location: http://www.cookiewookies.me/gracias.html");
?>