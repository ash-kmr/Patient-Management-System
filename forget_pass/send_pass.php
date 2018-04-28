<?php
//include('connection.php');
require 'PHPMailerAutoload.php';
session_start();
	$mail = new PHPMailer;

	$mail->SMTPDebug = 4;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'ravi.8796754@gmail.com';                 // SMTP username
	$mail->Password = 'maj@1000';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->setFrom('ravi.8796754@gmail.com', 'Sigma Hospital Solutions Ltd.');
	//$add = $_POST["email"];
	$email = $_SESSION['email'];
	$pass = $_SESSION['pass'];
	$mail->AddAddress($email);     // Add a recipient

	//$mail->addReplyTo($email);



	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'Password Recovery : Successfull';
	$mail->Body    = 'Dear user, Password for you account linked with Sigma Hospital Solutions Ltd. is  : '.$pass."' .  For security , please change it within 24 hrs ";
	$mail->AltBody = 'Sigma solution an enterprise of lahane_group_of_companies';

	if(!$mail->send())
		{
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
		}
	else 
		{
		echo 'Message has been sent';
		}

		
?>
