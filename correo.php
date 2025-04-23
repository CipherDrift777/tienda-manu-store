<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader (created by composer, not included with PHPMailer)
require 'vendor/autoload.php';

if (!isset($_POST['email']) || !isset($_POST['asunto']) || !isset($_POST['textarea'])) {

    header('location: index.html');
}


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    // Looking to send emails in production? Check out our Email API/SMTP product!

    $mail->isSMTP();
    $mail->Host = 'sandbox.smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Port = 2525;
    $mail->Username = 'e8f9f1f00bafeb';
    $mail->Password = '2c847d70ac670e';

    //Recipients
    $mail->setFrom('manuel.prieto.fempa@gmail.com', 'Tienda');
    $mail->addAddress($_POST['email']);

    //Content

    $mail->Subject = $_POST['asunto'];
    $mail->Body = $_POST['textarea'];

    $mail->send();

    header('location: contacto.php');


    echo 'Se ha enviado el correo exitosamente';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
