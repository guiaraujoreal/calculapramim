<?php
$nome = $_POST['name_user'];
$recado = $_POST['message'];

require_once('mail/PHPMailer.php');
require_once('mail/SMTP.php');
require_once('mail/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'joaoguilhermearaujo1617@gmail.com';
	$mail->Password = 'uhkdbswtsdevrcee';
	$mail->Port = 587;

	$mail->setFrom('joaoguilhermearaujo1617@gmail.com');
	$mail->addAddress('joaoguilhermearaujo1617@gmail.com');
	$mail->isHTML(true);
	$mail->Subject = $subject;
	$mail->Body = $body;
	$mail->AltBody = $altbody;

	if($mail->send()) {
		echo "<script>window.location.assign('confirm_email_register.php')</script>";
	} else {
		echo 'Email nao enviado';
	}
} catch (Exception $e) {
	$x=0;
}

?>