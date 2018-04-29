<?php
include('connection.php');


$query1 = "SELECT * FROM patient where email = '" . $_POST["email"] . "'";
$result = mysqli_query($conn,$query1);
$count = mysqli_num_rows($result);
//echo "num row executed".$count."\n";
if($count==0) {
	
	$query = "INSERT INTO patient (first_name, last_name, email, gender,address,phone) VALUES('" . $_POST["first_name"] . "', '" . $_POST["last_name"] . "', '" . $_POST["email"] . "', '" . $_POST["gender"] . "', '" . $_POST["address"] . "', " . $_POST["mobile_no"] . ")";
$current_id = mysqli_query($conn,$query);
//echo $query."\n";

if(!empty($current_id)) {
	require_once('phpmailer/PHPMailerAutoload.php');
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPDebug  = 0;
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "ssl";
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465 ; //587;
	$mail->isHTML();
	$mail->Username = 'sanurag616@gmail.com';
	$mail->Password = '10011999';
	$mail->SetFrom("No rply");
	$mail->Subject = 'Registration';
	$mail->Body = 'You are just logged in ';
	$add = $_POST["email"];
	$mail->AddAddress($add);
	try {
       $mail->send();
	   echo "send";
       }
	   catch (Exception $ex) {
                     echo $msg = $ex->getMessage();
                   }
}
else
{
	 echo "mail not executed";
}
	
} else {
	$message = "User Email is already in use.";	
	
}

?>