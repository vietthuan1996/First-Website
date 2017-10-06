<?php
session_start();
include("../../ketnoi/connectmuscle.php");
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'mail/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;// 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure ='tls';// 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "thuanit1996@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "lanhvietthuan1996";

//Set who the message is to be sent from
$mail->setFrom('thuanit1996@gmail.com', 'Muscle Shop');
$user = $_SESSION['username'];
echo 'hhhhh'.$user;
//Set an alternative reply-to address
$mail->addReplyTo('thuanit1996@gmail.com', 'Muscle Shop');
$sql="select * from user where username ='$user'";
$kq=mysql_query($sql);
if($d=mysql_fetch_array($kq)){
//Set who the message is to be sent to

echo "kkk".$d['email'];

$mail->addAddress($d['email']);

//Set the subject line
$mail->Subject = 'Hoa Don Mua Hang, Ngay :'.date("Y-m-d");

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML("Hóa Đơn Mua Hàng");

//Replace the plain text body with one created manually
$mail->AltBody = '';

 $t=$_SESSION["t"];
//Attach an image file
$mail->addAttachment("../../".$t);
}
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
?>
<script>
    location.href="../../index.php";
</script>
