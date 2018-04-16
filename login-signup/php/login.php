
<?php

/*Connection =.php will be included in inncludes folder*/
include("connection.php");

session_start();


if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if($_POST['Login'])
			{  
				$username = $conn->escape_string($_POST['Email']);
				$password = $conn->escape_string($_POST['Password']);
                
			//	echo "sadsads";
				if(isset($_POST['user']) && !isset($_POST['doctor']))
					{
					 
					 $password = md5($password);
                      $sql = "select P_id , count(*) as total from auth_patient where email = '".$username."' and password = '".$password."' ";
					  $result = $conn->query($sql);
					  $row = $result->fetch_assoc();
     
					  if( $row['total']!=0)
						{ 
                           $_SESSION['login_user'] = $username;   	                  
					        echo  $username." signed in "; 
 		                    header("location: welcome.php");
						}
					 else
					   {
 						echo "<script type='text/javascript'>alert('Invalid Username/Password ');</script>";  
					   }	
					}
					
				else if(!isset($_POST['user']) && isset($_POST['doctor']))
					{
                      $sql = "select doctor_id , count(*) as total from auth_doctor where email = '".$username."' and password = '".$password."' ";
					  $result = $conn->query($sql);
					  $row = $result->fetch_assoc();
     
					  if( $row['total']!=0)
						{ 
                           $_SESSION['login_user'] = $username;   	                  
					        echo  $username." Doctor signed in "; 
 		                    header("location: welcome.php");
						}
					 else
					   {
 						echo "<script type='text/javascript'>alert('Invalid Username/Password ');</script>";  
					   }	
					}
					
					echo "<script type='text/javascript'>alert('Invalid Username/Password ');</script>";  
			}
			 else
			 {
				$error = "Your Login Name invalid";
				echo "<script type='text/javascript'>alert('$error');</script>";  
			 }
	}
	else{
		echo "not post";
	}
  
?>





<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
	    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<link rel="stylesheet" href="CSS-login_sign_up/login.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
		<link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
	    <link href="../../assets/css/material-kit.css" rel="stylesheet"/>
		<link href="../../assets/css/demo.css" rel="stylesheet" />
		<script src="../../assets/js/core/jquery.min.js"></script>
		<script src="../../assets/js/core/popper.min.js"></script>
		<script src="../../assets/js/bootstrap-material-design.js"></script>
		<script src="../../assets/js/plugins/moment.min.js"></script>
		<script src="../../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
		<script src="../../assets/js/plugins/nouislider.min.js"></script>
		<script src="../../assets/js/material-kit.js?v=2.0.0"></script>
	</head>
	  
	 <body>
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="card card-container">
						<img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
							<p id="profile-name" class="profile-name-card"></p>
				
								<form form action="" method = "post" class="form-signin">
									<span id="reauth-email" class="reauth-email"></span>
										<label>UserName  :</label>
										<input type="email" id="inputEmail" name="Email" class="form-control" placeholder="Email address" required autofocus>
											<script>
												var email = document.getElementById("inputEmail").value;
												if(email.length > 0)
												alert(email);
											</script>
				 
									<label>Password  :</label>
										<input type="password" id="inputPassword" name="Password" class="form-control" placeholder="Password" required>
											<div id="remember" class="checkbox">
												<label>
													<input type="checkbox" value="Patient" name="user" value="1"> Patient</br>
													<input type="checkbox" value="doctor" name="doctor" value ="2"> Doctor</br>
													<input type="checkbox" value="remember-me"> Remember me
												</label>
											</div>
                
								 <input type = "submit" name ="Login" value = " Login "   class="btn btn-lg btn-primary btn-block btn-signin" /><br />
							
								</form><!-- /form -->
								<!-- Display signup page link in parralel-->
			
								<div style="display : inline-block">
									<a href="#" class="forgot-password"> Forgot the password?</a>
								</div>
						
								<div style = "display : inline-block;margin-left : 75px">
									<a href="http://localhost/LOG/sign_up.php" class="forgot-password"> Register</a>
								</div >

					</div><!-- /card-container -->
				</div><!-- /Col -md -6 -->
		
			</div><!-- /row -->
		</div><!-- /container -->
	  
	 </body>
	  
	  
 </html>
