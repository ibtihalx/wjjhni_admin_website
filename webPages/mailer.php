<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

error_reporting(E_ERROR | E_PARSE);
ini_set('display_errors', 1);

//Load Composer's autoloader
require '../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions

function sendEmail(String $email, String $pass)
{
    $mail = new PHPMailer(true);

    try {
        //Server settings

        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'wjjhni@gmail.com';                     //SMTP username
        $mail->Password   = 'ugumzxpdzyumfzqz';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;

        //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->Encoding     = "base64";
        $mail->CharSet = 'UTF-8';

        //Recipients
        $mail->setFrom('wjjhni@gmail.com', 'Wjjhni admin');
        $mail->addAddress($email);
        //Attachments

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = ' نظام وجهني';
        $mail->Body    = "<p dir='rtl'><b >لقد تم تسجيلك في نظام وجهني!</b></p>"
            . "<p dir='rtl'>لتسجيل الدخول اتبعي التعليمات الآتية :<p>"
            . "<p dir='rtl'> باستخدام بريدك الإلكتروني :$email" . "</p>" . "<p dir='rtl'>"
            . "كلمة المرور هي :$pass" . "</p>"
            . "<br><br><br>"
            . "<p dir='rtl'>فريق وجهني للإرشاد الأكاديمي</p>";

        $mail->AltBody
            = "لقد تم تسجيلك في نظام وجهني!\n"
            . "لتسجيل الدخول اتبعي التعليمات الآتية :\n"
            . " $email:باستخدام بريدك الإلكتروني \n"
            . "$pass:كلمة المرور هي " . "\n"
            . "فريق وجهني للإرشاد الأكاديمي";

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
