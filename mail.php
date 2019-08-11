<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'acaciasgyms@gmail.com';                     // SMTP username
    $mail->Password   = '3112031849';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('elvergalarga1955@gmail.com', 'Maicol');
    $mail->addAddress('elvergalarga1955@gmail.com', 'Joe User');     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'asunto muy importante';
    $mail->Body    = 'es un correo de prueba</b>';
    $mail->AltBody = 'holaaaaaaaaaaaaaaaaaaaaaaaa';

    $mail->send();
    echo 'El mensaje se envio';
} catch (Exception $e) {
    echo "Hubo un error ni el hp: {$mail->ErrorInfo}";
}
