<?php
	$id = $_SESSION['ID'];
	echo "<script>alert('entered get');</script>";
	include("../includes/connection.php");
	$firstname = $_GET["firstname"];
	$lastname = $_GET["lastname"];
	$address = $_GET["address"];
	$phone = $_GET["phone"];
	echo $firstname." ".$lastname." ".$address." ".$phone;
	$sql = "update Patient set first_name = '$firstname', last_name = '$lastname' and address = '$address' and phone = '$phone' where P_id = '$id'";
	$conn->query($sql);
?>