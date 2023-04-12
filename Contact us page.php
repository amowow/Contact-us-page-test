<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form fields and remove whitespace
  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $message = trim($_POST["message"]);

  // Check for empty fields
  if (empty($name) || empty($email) || empty($message)) {
    echo "Please fill in all the fields.";
    exit;
  }

  // Validate the email address
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Please enter a valid email address.";
    exit;
  }

  // Set the recipient email address
  $to = "ameen100941@outlook.com";

  // Set the email subject
  $subject = "New Contact Form Submission";

  // Build the email body
  $body = "Name: $name\n\n";
  $body .= "Email: $email\n\n";
  $body .= "Message: $message\n\n";

  // Set the email headers
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Send the email
  if (mail($to, $subject, $body, $headers)) {
    // Redirect to the thank you page
    header("Location: Thank_you page");
    exit;
  } else {
    echo "Oops! Something went wrong and we couldn't send your message.";
    exit;
  }
}

?>
