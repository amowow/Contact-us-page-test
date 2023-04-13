<?php
require 'vendor/autoload.php';

// Initialize PHPMailer object
$mail = new PHPMailer\PHPMailer\PHPMailer();

// Set SMTP settings (if using SMTP)
// $mail->isSMTP();
// $mail->Host = 'smtp.gmail.com';
// $mail->SMTPAuth = true;
// $mail->Username = 'your-email@gmail.com';
// $mail->Password = 'your-password';
// $mail->SMTPSecure = 'tls';
// $mail->Port = 587;

// Set the sender and recipient
$mail->setFrom($_POST['email'], $_POST['name']);
$mail->addAddress('ameen100941@outlook.com');

// Set email content
$mail->isHTML(false);
$mail->Subject = $_POST['subject'];
$mail->Body    = $_POST['message'];

// Send email
if(!$mail->send()) {
    echo 'Error: ' . $mail->ErrorInfo;
} else {
    header('Location: thank-you.php');
    exit;
}
