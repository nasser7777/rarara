<?php
// Get the form data
$name = $_POST['name'];
$to= $_POST['mluya.jr@gmail.com']
$email = $_POST['email'];
//$subject = $_POST['subject'];
$message = $_POST['message'];
// Create the email message
$email_message = "
From: $name
Email: $email
Subject: contact form
Message: $message
";
// Send the email
mail($to, 'contact form', $email_message) /*!{
    echo 'The email message was sent successfully.';
} else {
    echo 'The email message could not be sent.';
}*/
?>
