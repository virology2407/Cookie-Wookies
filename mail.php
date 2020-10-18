<?php
    if(isset($_POST["submit"])) {
        $name = $_POST["Nombre"];
        $email = $_POST["Email"];
        $type = $_POST["motivo"];
        $message = $_POST["mensaje"];
        
        // Form validation
        if(!empty($name) && !empty($email) && !empty($type) && !empty($message)){

            // reCAPTCHA validation
            if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {

                // Google secret API
                $secretAPIkey = '6Lf81dgZAAAAALu40KlfN_qUy2BwpwFlhK_qnEQO';

                // reCAPTCHA response verification
                $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretAPIkey.'&response='.$_POST['g-recaptcha-response']);

                // Decode JSON data
                $response = json_decode($verifyResponse);
                    if($response->success){

                        $toMail = "hola@cookiewookies.me";
                        $header = "From: " . $name . "<". $email .">\r\n";
                        mail($toMail, $type, $message, $header);

                        $response = array(
                            "status" => "alert-success",
                            "message" => "Tu mensaje fue envíado."
                        );
                    } else {
                        $response = array(
                            "status" => "alert-danger",
                            "message" => "Sos un robot? Probá de nuevo."
                        );
                    }       
            } else{ 
                $response = array(
                    "status" => "alert-danger",
                    "message" => "Por favor validá el reCaptcha."
                );
            } 
        }  else{ 
            $response = array(
                "status" => "alert-danger",
                "message" => "Todos los campos son requeridos."
            );
        }
    }  
?>