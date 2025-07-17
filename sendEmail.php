<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $state = $_POST['state'];
  $message = $_POST['message'];

  $to = "info@ceg.ng";
  $subject = "New Contact Form Submission";
  $body = "Name: $firstname $lastname\nEmail: $email\nPhone: $phone\nState: $state\nMessage:\n$message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "Message sent successfully!";
  } else {
    echo "Message failed to send.";
  }
}
?>
