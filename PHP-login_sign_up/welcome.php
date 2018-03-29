<?php
   include("connection.php");
  session_start();
  
  $user_check = $_SESSION['login_user'];

  //$result = $conn->query("select pass from user_pass where email = '".$user_check."'");
  
  //$login_session = $re['UserID'];
 // $login_session = $result->fetch_assoc();
  //$login_session = $login_session['pass'];
  if(!isset($_SESSION['login_user'])){
      header("location:index.php");
   }
?>
<html>
   
   <head>
      <title>Welcome To Endeavor Health Service</title>
   </head>
   
   <body>
      <h1>Register Succesful ?></h1> 
      
	  <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>
