<?php

        /*Connection =.php will be included in inncludes folder*/
        include("includes/connection.php");

        //session_start();
        
?>


  <title>Bootstrap Example</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css'>
  <link href='https://fonts.googleapis.com/css?family=Balthazar' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Stalinist One' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/material-kit.css" rel="stylesheet"/>
<script src="../assets/js/material-kit.js?v=2.0.0"></script>
  <script src = "js/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="star.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
  <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
  <script src="../assets/js/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/material.min.js"></script>
  <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/material-kit.css" rel="stylesheet"/>
  <link href="../assets/css/demo.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link rel="stylesheet" href="css/login.css">
  <script type="text/javascript" src = "js/login.js"></script>
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
      <link rel="stylesheet" type="text/css" href="css/banner.css">
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
      <a class="navbar-brand" style = "color:black; font-size:1.5em" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../index.php">Home</a></li>
        <li><a href="../Departments.php">Departments</a></li>
        <li><a href="../nearbyhospital.php">Nearby Hospitals</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <?php if(isset($_SESSION['ID'])){?>
     
        <?php   if($_SESSION['Identification'] == 0){ ?>
        <li><a href ="user/user.php"><?php  echo $_SESSION['login_user'];?></a></li>
        
        <?php } else { ?>
        
         <li><a href="#"><?php  echo $_SESSION['login_user'];?></a></li>
        
        <?php  } ?>
        <li><a href="../logout.php">Logout</a></li>
     <?php } else{  ?>
        <li><a href="#" id = "Login/Signup" data-toggle= "modal" data-target = "#mymodal">Login/SignUp</a></li>
        <?php }?>
      </ul>
      
      <script>
      
        function doctor_page(){
        
                window.location.href = "doctors/doctor.html";
 
        }
        
        function user_page(){
        
                window.location.href = "user/user.php";
 
        
        }
      </script>
      </ul>
      </div>
      </div>
      </nav>
      </div>
<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    
      <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="../SignUp.php" method="post" id="SignUpForm">
           <div id = "invalidSignUp" style="text-align : center; opacity: 0;color : red"><h4>This Email ID is already Registered</h4></div>
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name = "First_Name"required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" name = "Last_Name"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name = "Email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Mobile<span class="req">*</span>
            </label>
            <input type="number" name="mobile_no" required autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
              Address<span class="req">*</span>
            </label>
                <input type="text" name="address" autocomplete="off"/>
          </div>
          
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" id = "password" name="Password"required autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
              Confirm Password<span class="req">*</span>
            </label>
            <input type="password" id = "confirm_password" name="Pass"required autocomplete="off"/>
            <span id="message"></span>
            
            
          </div>
          
          <input type="submit" id = "buttonActivate" name = "Sign Up" class="button button-block"/>Sign Up
          <script>
          $('#password, #confirm_password').on('keyup', function () {
                if ($('#password').val() == $('#confirm_password').val()) {
                        $('#message').html('Matching').css('color', 'green');
                        $("#buttonActivate").prop("disabled", false);
                } else {
                        $('#message').html('Not Matching').css('color', 'red');
                        $("#buttonActivate").prop("disabled", true);
                }
         });
          
          
          </script>
          </form>
          
          <script>
  
                $(document).ready(function(){
          
                        //alert('Hello');
                        $("#SignUpForm").submit(function(obj){
                        
                        
                                var query = $("#SignUpForm").serialize();
                                //alert(query);
                                var url = "../SignUp.php?"+query;
                                
                                //alert(url);
                                
                                $.getJSON(url,function(json){
                                
                                        var Key = Object.keys(json)[0];
                                        /*
                                        Key.forEach(function(key) {
                                        
                                        
                                                alert(key+"="+json[key]);
                                        });*/
                                                                               
                                        if(json[Key] == 'Invalid'){
                                        
                                        
                                                $("#invalidSignUp").css("opacity","1");
                                                
                                                //alert('Invalid Username or Password');
                                        
                                        }else{
                                        
                                        
                                                location.reload();
                                        
                                        }
                                
                                });
                                obj.preventDefault();
                        
                        });
                
                
                });
        
        </script>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="../Login.php" method="post" id="LoginForm">
          <div id = "invalidLogin" style = "text-align:center;opacity:0;color:red">INVALID USERNAME/PASSWORD</div>
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name = "Email" required autocomplete="off"/>
                </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name = "Password"required autocomplete="off"/>
          </div>
          <div id="remember" class=" field-wrap">
          <div class="container-fluid"></div>
          <div class = "col-sm-4">
          <label style="margin-left: 12%;">Patient</label>
            <input type="checkbox" style="width: 20px; height: 20px;margin-top: 5%" value="Patient" name="Identification"><br></div>
            <div class = "col-sm-4">
            <label style="margin-left: 12%">Doctor</label>
             <input type="checkbox" style="width: 20px; height: 20px;margin-top: 5%" value="Doctor" name="Identification"></div>
             <div class = "col-sm-4">
            <label style="margin-left: 12%">Staff</label>
             <input type="checkbox" style="width: 20px; height: 20px;margin-top: 5%" value="Staff" name="Identification"></div>
			<script>
			
			        $('input[type="checkbox"]').on('change', function() {
                                        $('input[type="checkbox"]').not(this).prop('checked', false);
                                });
                                
			</script>
		</label>
	</div>
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <input type="submit" name = "Login"  value = "Log In" class="button button-block"/>
          
          </form>
          <script>
  
                $(document).ready(function(){
          
                        //alert('Hello');
                        $("#LoginForm").submit(function(obj){
                        
                        
                                var query = $("#LoginForm").serialize();
                                //alert(query);
                                var url = "../Login.php?"+query;
                                
                                //alert(url);
                                $.getJSON(url,function(json){
                                
                                        var Key = Object.keys(json)[0];
                                        /*
                                        Key.forEach(function(key) {
                                        
                                        
                                                alert(key+"="+json[key]);
                                        });*/
                                       
                                        if(json[Key] == 'Invalid'){
                                        
                                        
                                                $("#invalidLogin").css("opacity","1");
                                                
                                                //alert('Invalid Username or Password');
                                        
                                        }else{
                                        
                                        
                                                location.reload();
                                        
                                        }
                                
                                });
                                obj.preventDefault();
                        
                        });
                
                
                });
        
        </script>

        </div>
        
      </div><!-- tab-content -->      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/login.js"></script> 
  </div>
</div>
