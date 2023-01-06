<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $to = "keyword1122@gmail.com";
  $subject = "New Contact Form Message";
  $headers = "From: $email" . "\r\n" .
             "Reply-To: $email" . "\r\n" .
             "X-Mailer: PHP/" . phpversion();
  mail($to, $subject, $message, $headers);
  header("Location: contact-form-thank-you.html");
?>
