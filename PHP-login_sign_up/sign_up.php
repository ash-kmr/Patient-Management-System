
<?php

include("connection.php");

session_start();


if($_SERVER["REQUEST_METHOD"] == "POST")
	{
     
		if($_POST['Register'])
			{  
	    		$target_dir = "C:/xampp/htdocs/LOG/uploads/";
				$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				
				if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif" )
					{
						if (is_uploaded_file($_FILES['fileToUpload']['tmp_name']))
							{       
								move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file);
								echo 'moved file to destination directory';
							}
					}
   
				$First_name = $conn->escape_string($_POST['first_name']);
				$Last_name = $conn->escape_string($_POST['last_name']);
				$Mobile_no = $conn->escape_string($_POST['mobile_no']);
				$Email = $conn->escape_string($_POST['email']);
				$Gender = $conn->escape_string($_POST['gender']);
				$Address = $conn->escape_string($_POST['address']);
				$Password = $conn->escape_string($_POST['password']);
				$Password_confirmation = $conn->escape_string($_POST['password_confirmation']);
  
    
		if($Password === $Password_confirmation)
			{
				$sql = "insert into patient(first_name,last_name,phone,email,gender,address,file_url) values('".$First_name."','".$Last_name."','".$Mobile_no."','".$Email."','".$Gender."','".$Address."' ,'".$target_file."')";
				if ($conn->query($sql) === TRUE) 
					{
						echo "Record created successfully";
	        
						$p_id = "select P_id from patient where email like '$Email'";
						$P_id_1 = mysqli_query($conn, $p_id);
						$row1 = mysqli_fetch_assoc($P_id_1);
						$p = $row1["P_id"];	  
						$Password = md5($Password);
						$auth_p = "insert into auth_patient(email,password,P_id) values('".$Email."', '".$Password."' , '".$p."')";
						$auth_p_1 = mysqli_query($conn, $auth_p);

						header("location: welcome.php?");	      
					}
				else 
					{
					echo "Error: " . $sql . "<br>" . $conn->error;
					}
   
    
	   
			}
			else 
				{
					echo "<script type='text/javascript'>alert('Conformation Password need to be same');</script>";
				}
	  
			}

	}

?>




<!DOCTYPE html>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<link rel="stylesheet" href="CSS-login_sign_up/sign.css">  <!-- css file included -->
	</head>


<body>
	<div class="container">
		<div id = "back">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
					<form  form action="" method = "post"  name="Form" onsubmit="return validateForm()"  enctype="multipart/form-data" >
							<p> <br> </p>
						<h2>Please Sign Up </h2>
						<hr class="colorgraph">
			
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" required>
								</div>
							</div>
				
							<div class="col-xs-4 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
								</div>
							</div>
						</div>
			
			
						<div class="form-group">
							<input type="number" name="mobile_no" id="display_name" class="form-control input-lg" placeholder="Mobile No" tabindex="3"  required>
						</div>
						
						<div class="form-group">
							<input type="email" name="email" id="inputEmail" class="form-control input-lg" placeholder="Email Address" tabindex="4"   required>
						</div>
			
						<div class="form-group">
							<input type="file" name="fileToUpload" id="fileToUpload">	
						</div>
			
						<div class="form-group">
							<input type="text" name="address" id="display_name" class="form-control input-lg" placeholder="Residential Address" tabindex="3">
						</div>
			
						<div class="form-group">
							<input type="text" name="gender" id="display_name" class="form-control input-lg" placeholder="Male/Female" tabindex="3"   required >
						</div>
			
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password"   tabindex="5"    required>
								</div>
							</div>
						
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password"  tabindex="6"  >
								</div>
							</div>
						</div>
			 
						<hr class="colorgraph">
							<div class="row">
								<div class="col-xs-12 col-md-6"><input type="submit" name ="Register" value=" Register "  class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
								<!--<div class="col-xs-12 col-md-6"><a href="#" class="btn btn-success btn-block btn-lg">Sign In</a></div> -->
							</div>
								<p> <br><br></p>
					</form>
				</div>
			</div>
		</div>
	
	</div>

  </body>
  </html>
