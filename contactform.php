<?php

if(isset($_POST['submit'])) {
$name = $_POST['name'];
$subject = $_POST['subject'];
$mailFrom = $_POST['e-mail'];
$message = $_POST['message'];

$mailTo = "fthegenius@outlook.com";
$headers = "From: My Website ".$mailFrom;
$txt = "You have received an e-mail from ".$name.".\n\n".$message;

mail($mailTo, $subject, $txt, $headers);
header("Location: contact.html");
}
?>
