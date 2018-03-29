
<?php

include("connection.php");

session_start();


if($_SERVER["REQUEST_METHOD"] == "POST"){
     
  
 
 if($_POST['Register']){  
 echo "Record created successfully";
     $First_name = $conn->escape_string($_POST['first_name']);
     $Last_name = $conn->escape_string($_POST['last_name']);
     $Mobile_no = $conn->escape_string($_POST['mobile_no']);
     $Email = $conn->escape_string($_POST['email']);
	 $Gender = $conn->escape_string($_POST['gender']);
	 $Address = $conn->escape_string($_POST['address']);
     $Password = $conn->escape_string($_POST['password']);
     $Password_confirmation = $conn->escape_string($_POST['password_confirmation']);
  
	 $sql = "insert into patient(first_name,last_name,phone,email,gender,address) values('".$First_name."','".$Last_name."','".$Mobile_no."','".$Email."','".$Gender."','".$Address."')";
     
	 
     if ($conn->query($sql) === TRUE) {
             echo "Record created successfully";
             header("location: welcome.php");	      
		  }
         else 
		   {
              echo "Error: " . $sql . "<br>" . $conn->error;
	       }
   
    
	   
      
 
}

}

?>




<!DOCTYPE html>
<html>
 <head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="CSS/sign.css">  <!-- css file included -->
</head>


<body>

<div class="container">
<div id = "back">
<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form  form action="" method = "post">
			<p> <br><br> </p>
			<h2>Please Sign Up </h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
					</div>
				</div>
				<div class="col-xs-4 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
					</div>
				</div>
			</div>
			
			
			
			
			
		
			<div class="form-group">
				<input type="number" name="mobile_no" id="display_name" class="form-control input-lg" placeholder="Mobile No" tabindex="3">
			</div>
			<div class="form-group">
				<input type="email" name="email" id="inputEmail" class="form-control input-lg" placeholder="Email Address" tabindex="4">
			</div>
			
			
			<div class="form-group">
				<input type="text" name="address" id="display_name" class="form-control input-lg" placeholder="Residential Address" tabindex="3">
			</div>
			
			
			<div class="form-group">
				<input type="text" name="gender" id="display_name" class="form-control input-lg" placeholder="Male/Female" tabindex="3">
			</div>
			
			
			
			
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
					</div>
				</div>
			</div>
			 <!--<form>
			   <input type="checkbox" name="agree" > I Agree<br>
			 </form>
			-->
			<hr class="colorgraph">
			<div class="row">
		
				<div class="col-xs-12 col-md-6"><input type="submit" name ="Register" value=" Register " class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
				<!--<div class="col-xs-12 col-md-6"><a href="#" class="btn btn-success btn-block btn-lg">Sign In</a></div> -->
			</div>
		</form>
		<h1> <br> </h1>
		
	</div>
</div>
</div>


  </body>
  </html>