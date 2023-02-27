<?php
// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
  
    $to = "mayorisaac24@gmail.com";
    $subject = "Message from " . $name;

    // Set the email headers
    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=utf-8" . "\r\n";
    $headers .= "From: " . $name . " <" . $email . ">" . "\r\n";

    // Set the email message
    $message = "
    <html>
    <head>
    <title>HTML Email</title>
    </head>
    <body>
    <p>" . $message . "</p>
    </body>
    </html>
    ";

    // Send the email
    if (mail($to, $subject, $message, $headers)){
        echo "Message sent successfully";
        }
    else {
        echo "Message Failed!";
    }

}
