<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Get form data
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	// Validate form data
	if (empty($name) || empty($email) || empty($message)) {
		// Missing form data
		die('Please fill in all required fields.');
	}

	// Set up email
	$to = 'ameen100941@outlook.com';
	$subject = 'Contact Form Submission';
	$body = "Name: $name\nEmail: $email\nMessage:\n$message";

	// Send email
	if (mail($to, $subject, $body)) {
		// Email sent successfully
		echo 'Thank you for your message!';
	} else {
		// Error sending email
		die('Oops! Something went wrong. Please try again later.');
	}
} else {
	// Redirect to contact form page if accessed directly
	header('Location: index.html');
	exit;
}
?>
