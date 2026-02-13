<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';                       //gmail SMTP server set to send through
    $mail->SMTPAuth   = true;
    $mail->Username   = 'jek.26.01.2005@gmail.com';                     //SMTP username (your gmail account)
    $mail->Password   = 'ocla lrpp xlwi lrii';                               //SMTP password (your gmail password or app password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    //Recipients
    $mail->setFrom('jek.26.01.2005@gmail.com', 'Евгений');         //Set the sender of the message (your email address)
    $mail->addAddress('eugene.sh05@email.ru', 'Катюша');     //Add a recipient (your bae's email address)

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Я люблю тебя)';
    $mail->Body    = 'С праздником тебя и спасибо, что ты есть у меня, оставайся такой хорошенькой всегда ❤';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
