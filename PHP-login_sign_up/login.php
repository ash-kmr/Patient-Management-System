
<?php

/*Connection =.php will be included in inncludes folder*/
include("connection.php");

session_start();


if($_SERVER["REQUEST_METHOD"] == "POST"){
     
  //echo "Record created successfully";
 
 if($_POST['Login']){  
 echo "Record created successfully";
   $username = $conn->escape_string($_POST['Email']);
  
   
   //$password = $conn->escape_string($_POST['Password']);
   
   
  
   
   //esult = mysql_query( "select count(*) from  patient where email = '".$username."' ");
 $sql = "select count(*) as total from  patient where email = '".$username."' ";
 $result = $conn->query($sql);
   $row = $result->fetch_assoc();
      
    //echo "sadasdsad " ;
	echo $row['total'];
	
   if( $row['total']==1){
	   
	   
      /*Select name from result field yet to be updated*/
      $_SESSION['login_user'] = $username;
         
         
	  header("location: welcome.php");
	   
   }
   else
     $error = "Your Login Name invalid";
    alert( $error);
  }
}
else{
   echo "Record created successfully"; 
}
?>





<!DOCTYPE html>
<html>
   
   <head>
	
       <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	   <link rel="stylesheet" href="CSS/login.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	     
	    
		
	  
	  </head>
	  
	  <body>
	  
	 <div class="container">
	 <div class="row">
	 
	 <div class="col-lg-4">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
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
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                
								 <input type = "submit" name ="Login" value = " Login "   class="btn btn-lg btn-primary btn-block btn-signin" /><br />
            </form><!-- /form -->
			<!-- Display signup page link in parralel-->
			
			<div style="display : inline-block">
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
			</div>
						
			<div style = "display : inline-block;margin-left : 75px">
            <a href="http://localhost/LOG/sign_up.php" class="forgot-password">
                Register
            </a>
			</div >

        </div><!-- /card-container -->
		</div><!-- /Col -md -6 -->
		<div class="col-lg-8">
		
	 </div><!-- col-lg-6 -->
		</div><!-- /row -->
    </div><!-- /container -->
	  
	  </body>
	  
	  
	  </html>
