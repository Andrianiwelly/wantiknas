


<?php

$name= $_POST['name'];
$phone= $_POST['phone'];
$email= $_POST['email'];
$message= $_POST['message'];
$body= "
name : $name <br/>
phone : $phone <br/>
email: $email <br/>
message: $message <br/>
";

function Send_Mail($to,$subject,$body)
{
require 'PHPmailer/class.phpmailer.php';

 

$email= $_POST['email'];
$mail = new PHPMailer();
$mail->IsSMTP(true); // SMTP
$mail->SMTPAuth = true; // SMTP authentication
$mail->Host= '';
$mail->SMTPSecure = 'tls';
$mail->Port = 465;
$mail->SetFrom("wellyandriani97@gmail.com","email sender");
$mail->Username = "wellyandriani97@gmail.com"; // username gmail yang akan digunakan untuk mengirim email
$mail->Password = "12345090910"; // Password email
$mail->SetFrom($email, 'user');
$mail->AddReplyTo($email,'user');
$mail->Subject = $subject;
$mail->MsgHTML($body);
$address = $to;
$mail->AddAddress($address, $to);
$mail->AddAddress($email);
if(!$mail->Send())
return false;
else
return true;

}

$to = "......@gmail.com"; //email tujuan
$subject = "New email"; // subject email
echo"<br/><br/><center><h3>email telah terkirim</h3></center>";
Send_Mail($to,$subject,$body);
?>

