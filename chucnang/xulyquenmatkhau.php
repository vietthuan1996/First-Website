
<?php

function rand_string( $length ) {
    $str = "";
$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

$size = strlen( $chars );

for( $i = 0; $i < $length; $i++ ) {

    $str .= $chars[ rand( 0, $size - 1 ) ];

 }

return $str;
}

?>
<?php
if(isset($_POST["btnGui"]))
{
	$nhanemail = $_POST["email"];
	$truyvanemail = "SELECT * FROM user WHERE email = '$nhanemail'";
	$nhanketqua = mysql_query($truyvanemail);
	if(mysql_num_rows($nhanketqua) == 1 )
	{
		?>
        <script>
		alert("Kiểm tra thông tin từ email của bạn");
        </script>
        <?php
        /**
         * This example shows settings to use when sending via Google's Gmail servers.
         */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        include ('mail/PHPMailerAutoload.php');

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
        $mail->Port = 587;//465

//Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = 'tls';//ssl

//Whether to use SMTP authentication
        $mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = "thuanit1996@gmail.com";

//Password to use for SMTP authentication
        $mail->Password = "lanhvietthuan1996";

//Set who the message is to be sent from
        $mail->setFrom('thuanit1996@gmail.com', 'Muscle Shop');

//Set an alternative reply-to address
        $mail->addReplyTo('thuanit1996@gmail.com', 'Muscle Shop');

//Set who the message is to be sent to
        while($row_user = mysql_fetch_array($nhanketqua))
        {
            $mail->addAddress($row_user['email']);
        }
//Set the subject line
        $mail->Subject = 'Cap Nhat Mat Khau, Ngay : '.date("Y-m-d");

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
        $randomstring = rand_string(5);
        $mail->msgHTML("Mật khẩu của bạn bây giờ là :".$randomstring);
        $thaydoimatkhau = "UPDATE user SET
					password = '$randomstring'
					WHERE email = '$nhanemail' ";
        mysql_query($thaydoimatkhau);
//Replace the plain text body with one created manually
        $mail->AltBody = 'This is a plain-text message body';

//Attach an image file
//$mail->addAttachment('Chrysanthemum.png');

//send the message, check for errors

        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Message sent!";
        }
        ?>
        <script>
            location.href="../Laptrinhweb/index.php";
        </script>
        <?php
     }
	 else
	 {
	?>
    	<script>
		alert("Email không chính xác xin kiểm tra lại");
		window.history.back();
        </script>
 <?php
		 
		}
}
?>

