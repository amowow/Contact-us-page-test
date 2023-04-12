<?php
//geting the date from the form
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Message = $_POST['Message'];

$to = "ameen100941@outlook.com";

$subject ="MovieT contact"
$txt ="Name =" . $Name . "\r\n Email = " . $Email . "\r\n Message =" . $Message;

$headers = "From: MovieT Contact" . "\r\n" . "CC: ameen100942@outlook.com";
if($Email !=null){
    mail($to,$subject,$txt,$headers);
}
// getting them to thank you page

$header("Location: Thank_you page.html")
?>