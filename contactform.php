<?php
$name = $_POST['inputname'];
$emailFrom = $_POST['inputemail'];
$subject = $_POST['inputsubject'];
$message = $_POST['message'];

$emailTo = "hello@ohitsmike.com";
$header = "From ". $emailFrom;
$txt = "You have received an email from " . $name . ". \n \n " . $message;

mail($emailTo, $subject, $txt, $header);
header("Location:index.php?mailsent");

?>
