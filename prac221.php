<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';  // Composer autoload or adjust if manual

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';  // Gmail SMTP server
    $mail->SMTPAuth   = true;
    $mail->Username   = 'Kpuri9134@gmail.com';   // YOUR Gmail email
    $mail->Password   = 'Kpuri9134@gmail';      // Your Gmail App Password
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    //Recipients
    $mail->setFrom('Kpuri9134@gmail.com', 'Your Name');
    $mail->addAddress('krushnappuri"gmail.com', 'Recipient Name');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Test Email via PHPMailer SMTP';
    $mail->Body    = 'Hello! This is a test email sent via PHPMailer using Gmail SMTP.';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
