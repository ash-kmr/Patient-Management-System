<?php

        include 'includes/connection.php';
        
        session_start();
			if($_SERVER["REQUEST_METHOD"] == "POST")
				{
					if($_POST['OTP'])
						{
						//echo "<script type='text/javascript'>alert('Invalid OTP , please try again');</script>";
							$otp = $conn->escape_string($_POST['otp']);
                                                        
							$sql = "select otp, date from verify_email where otp = '".$otp."'";
							$result = $conn->query($sql);
							/*
							
							*/
							if($result->num_rows > 0)
								{
								//echo "<script type='text/javascript'>alert('Invalid OTP , please try again');</script>";
								$row = $result->fetch_assoc();	
							        $otp  = $row['otp'];
							        $prev_date  = $row['date'];
								
								//echo "<script type='text/javascript'>alert('Invalid OTP , please try again');</script>";
									$curr_date = date('Y-m-d H:i:s');
									
									$time_diff = "SELECT TIMESTAMPDIFF(SECOND, '".$prev_date."','".$curr_date."') as tt";
									$result = $conn->query($time_diff);
									$row = $result->fetch_assoc();
									
									$time=  $row['tt'];
									
									if($time>300)
										{
										echo "<script>alert('OTP expired ,please generate new OTP and try again'); window.location.href='index.php'; </script>";
										
										
										}				
									else
										{
											//session_start();
											//echo "<script type='text/javascript'>alert('Invalid OTP , please try again');</script>";
											$First_Name = $_SESSION['first_name'];
											$Last_Name = $_SESSION['last_name'];
											$Email = $_SESSION['email_1'];
											$Password = $_SESSION['password'];
											$Mobile_no = $_SESSION['mobile_no'];
											$Address = $_SESSION['address'];
											//echo "<script type='text/javascript'>alert('".$Email."');</script>";
					if($_SESSION['Repr'] == 'Patient')	{			
$sql1 = "insert into Patient(first_name,last_name,phone,email,address) values ('".$First_Name."','".$Last_Name."','".$Mobile_no."','".$Email."','".$Address."')";
                                                                                //echo "<script type='text/javascript'>alert('".$Mobile_no."');</script>";
                                                                                $ans = $conn->query($sql1);
										if ($ans){
										echo "<script type='text/javascript'>alert('".$Email."');</script>";
                                			$Password = md5($Password);
											$Patient = "select P_id from Patient where email = '".$Email."' and first_name = '".$First_Name."' and last_name = '".$Last_Name."'";
                        
											$result = $conn->query($Patient);
											
											if($result){
												$row = $result->fetch_assoc();
												$P_id = $row['P_id'];
												$auth_p = "insert into Auth_patient(email,password,P_id) values('".$Email."', '".$Password."' , '".$P_id."')";
												
												if($conn->query($auth_p)){
													echo '<script>alert("Account Created Succesfully")</script>';
                                                                                                        
                                                                                                        $_SESSION['ID']=$P_id;
                                                                                                        $_SESSION['login_user']=$First_Name;
                                                                                                        $_SESSION['Identification']='0';
                                                                                                        
                                                                                                      header("location:index.php");
                                            //    $_SESSION['login_user'] = $First_Name;
                                              //  $_SESSION['ID'] = $P_id;
                                               // $_SESSION['Identification'] = 0;
                                               
                                               // header('Location: '.$_SERVER['REQUEST_URI']);
																		}                                
													}
								}
											
											
							}else{
							
							
							        $sql = "insert into Staff(first_name,last_name,phone,email,address) values('".$First_Name."','".$Last_Name."','".$Mobile_no."','".$Email."','".$Address."')";
                                        
                                        
                                   
                                        if ($conn->query($sql)){
                                                
                                        
                                                $Password = md5($Password);
                                                $Patient = "select staff_id from Staff where email = '".$Email."' and first_name = '".$First_Name."' and last_name = '".$Last_Name."'";
                                        
                                                $result = $conn->query($Patient);
                                                if($result->num_rows > 0){
                                                        
                                                        $row_Sign = $result->fetch_assoc();
                                                        $P_id = $row_Sign['staff_id'];
                                                        $auth_p = "insert into Auth_staff(email,password,staff_id) values('".$Email."', '".$Password."' , '".$P_id."')";
                                                        if($conn->query($auth_p)){
                                                        
                                                                //echo '<script>alert("Hello")</script>';
                                                                
                                                                $_SESSION['login_user'] = $First_Name;
                                                                $_SESSION['ID'] = $P_id;
                                                                $_SESSION['Identification'] = 2;
                                                                header("location:index.php");
                                                                //$arr['Result'] = 'Success';
                                                               //echo '<script>alert("Hello");</script>';
                                                                //header('Location: '.$_SERVER['REQUEST_URI']);
                                                        
                                                        
                                                        }                                
                                                }
                                        
                                        }
							
							
							
							
							
							}				
											
						}
								
								}
							else
								{
									echo "<script type='text/javascript'>alert('Invalid OTP , please try again'); location.reload();</script>";
									 
								}
						}
				}
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>HealthPlus</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link href='https://fonts.googleapis.com/css?family=Balthazar' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Stalinist One' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
  <script src = "js/jquery.min.js"></script>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
  <link href="assets/css/demo.css" rel="stylesheet" />
  <script src="assets/js/core/jquery.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/bootstrap-material-design.js"></script>
<script src="assets/js/plugins/moment.min.js"></script>
<script src="assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
<script src="assets/js/plugins/nouislider.min.js"></script>
<script src="assets/js/material-kit.js?v=2.0.0"></script>
<script type="text/javascript" src = "js/login.js"></script>
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <style>
    body{
      background-color:#E5E7E9;
    }
  </style>
</head>
<body>
<div class = "mynav">
   <nav class="navbar navbar-inverse navbar-fix navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" style = "color:black; font-size:1.5em" href="#">Health</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
        <li><a href="Departments.php">Departments</a></li>
      </ul>
      
      </div>
      </div>
      </nav>
</div>
<div class = "container" style="margin-top: 8%">
  <div class="form">
    <div id="signup">   
      <form action="" method="post">
      <h1 style="color:white">Verify Email : </h1><br>
      <div class="field-wrap">
        <p> An OTP has been send to your Registered Email Address , it will expire in 5 mins** </p>
		
        <input type="number" placeholder="Enter Otp ..." name = "otp" required autocomplete="off"/>
      </div>
      
      <input type="submit" id = "buttonActivate" name = "OTP" class="button button-block"/>
      </form>
</div>
</div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="../js/login.js"></script>

</body>
</html>
