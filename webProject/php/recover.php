<?php
ini_set("display_errors",true);

use PHPMailer\PHPMailer\PHPMailer;

require '../vendor/autoload.php';
require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/autoload.php';

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Mailer = "smtp";

$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "henokmto444@gmail.com";
$mail->Password   = "#12232445";

$mail->AddAddress("meselefrancesco@gmail.com", "admin");
$mail->SetFrom("henokmto444@gmail.com", "ADAS");


$mail->Subject = "new password";
$content = "screwthis";

$mail->MsgHTML($content); 
if(!$mail->Send()) {
  echo "Error while sending Email.";
  var_dump($mail);
} else {
  echo "Email sent successfully";
}






?>