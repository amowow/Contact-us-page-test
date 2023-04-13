<?php
//getting the data from the form
$Name = filter_input(INPUT_POST, 'Name', FILTER_SANITIZE_STRING);
$Email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_EMAIL);
$Message = filter_input(INPUT_POST, 'Message', FILTER_SANITIZE_STRING);

$to = "ameen100941@outlook.com";
$subject = "MovieT contact";
$txt = "Name = " . $Name . "\r\nEmail = " . $Email . "\r\nMessage = " . $Message;
$headers = "From: MovieT Contact\r\n" .
    "CC: ameen100942@outlook.com\r\n" .
    "MIME-Version: 1.0\r\n" .
    "Content-type: text/plain; charset=UTF-8\r\n";
if ($Email != null && filter_var($Email, FILTER_VALIDATE_EMAIL)) {
    mail($to, $subject, $txt, $headers);
}
// redirecting to the thank you page
header("Location: Thank_you_page.html");
exit;
?>
