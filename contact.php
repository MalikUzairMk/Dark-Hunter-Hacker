<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "demo@email.com"; // <-- Yahan apna email lagao
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  $subject = "New Inquiry from MãLïK Uzair Mk";
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  if (mail($to, $subject, $body)) {
    echo "Email Sent Successfully!";
  } else {
    echo "Email Failed!";
  }
}
?>