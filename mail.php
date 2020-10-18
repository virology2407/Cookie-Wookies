<?php
// build the request url
$verify_url = 'https://www.google.com/recaptcha/api/siteverify';
$args = array('secret' => '6Lf81dgZAAAAALu40KlfN_qUy2BwpwFlhK_qnEQO',
              'response' => $_POST['g-recaptcha-response'],
              'remoteip' => $_SERVER['REMOTE_ADDR']);
$request_url = $verify_url.'?'.http_build_query($args);
 
// a JSON object is returned
$response = file_get_contents($request_url);
 
// decode the information
$json = json_decode($response, true); // true decodes it to an array instead of a PHP object
 
// handle the response
if($recaptcha['success'] == 1) {
	$name = $_POST['Nombre'];
    $email = $_POST['Email'];
    $type = $_POST['motivo'];
    $message = $_POST['mensaje'];
    $formcontent=" From: $name \n Type: $type \n Message: $message";
    $recipient = "hola@cookiewookies.me";
    $subject = "Contact Form";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo "Thank You!" . " -" . "<a href='gracias.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
} else {
	// run code on unsuccessful reCAPTCHA
}
?>