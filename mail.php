<?php
require 'phpmailer/PHPMailerAutoload.php';
require 'phpmailer/class.phpmailer.php';

$mail = new PHPMailer;
$mail->isSMTP();

$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';

$name = $_POST['fname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$mail->Username = "infos@tirinyibeekeepers.org";
$mail->Password = '@tirinyi.1';

$mail->setFrom($email, "Tirinyi Website");
$mail->addAddress('tirinyi@gmail.com');
$mail->addReplyTo($email);

$mail->isHTML(true);
$mail->Subject = 'You\'ve been contacted by ' . $name . '.';
$mail->Body = "<h2 align=center>Name: " . $name . "</h2><br><h2 align=center>Phone Number: " . $phone . "</h2><br>
                <h2 align=center>Email: " . $email . "</h2><br><p align=center>" . $message . "</p><br>";

if (!$mail->send()) {
    echo "Message could not be sent. Mailer Error: " . $mail->ErrorInfo;
} else {
    header("Location: contact-us.html");
}
?>
