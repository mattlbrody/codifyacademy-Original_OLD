<?php
$name = $_POST['contactname'];
$email = $_POST['contactemail'];
$message = $_POST['contactmessage'];

$formcontent="From: $name \n Email: $email \n Message: $message";

$recipient = 'mattlbrody@gmail.com'; //my email

$subject = "Message From MattBrody.me";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/contacted.php';
  header('Location: ' . $home_url);
?>