<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Validate form data
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'Invalid email';
    exit;
  }

  // Send email
  $to = 'yourname@gmail.com';
  $subject = 'New message from ' . $name;
  $headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
  mail($to, $subject, $message, $headers);

  echo 'Message sent successfully';
}
?>




