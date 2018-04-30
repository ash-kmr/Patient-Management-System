<?php

        session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link href='https://fonts.googleapis.com/css?family=Balthazar' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Stalinist One' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
  <link rel="stylesheet" href="css/login.css">

  <script type="text/javascript" src = "js/login.js"></script>
  <script src = "js/jquery.min.js"></script>
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
        <!--
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
        -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
      
     <?php if(isset($_SESSION['ID'])){?>
     
        <?php   if($_SESSION['Identification'] == 0){ ?>
        <li><button type="button" onclick = "user_page()" class="btn btn-default btn-default2" style="margin-top: 20%"><?php  echo $_SESSION['login_user'];?></button></li>
        
        <?php } else if($_SESSION['Identification'] == 1) { ?>
        
         <li><button type="button" onclick = "doctor_page()" class="btn btn-default btn-default2" style="margin-top: 25%"><?php  echo $_SESSION['login_user'];?></button></li>
        
        <?php  }else{ ?>
        
                <li><button type="button" onclick = "Staff_page()" class="btn btn-default btn-default2" style="margin-top: 25%"><?php  echo $_SESSION['login_user'];?></button></li>
        
        <?php  }?>
        
        <li><button type="button" onclick = "logout_page()" class="btn btn-default btn-default2" style="margin-top: 25%">Logout</button></li>
     <?php } else{  ?>
        <li><button type="button" class="btn btn-default btn-default2" data-toggle= "modal" data-target = "#mymodal" style="margin-top: 25%">Login</button></li>
        <?php }?>
      </ul>
      
      <script>
      
        function doctor_page(){
        
                window.location.href = "doctors/doctor.html";
 
        }
        
        function user_page(){
        
                window.location.href = "user/user.php";
 
        
        }
        function Staff_page(){
        
                window.location.href = "staff/staff.php";
 
        
        }
        
        function logout_page(){
        
                window.location.href = "logout.php";
        }
      </script>
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
          
          <form action="SignUp.php" method="post" id="SignUpForm">
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
          <div class = "col-sm-6">
          <label style="margin-left: 12%;">Patient</label>
            <input type="checkbox" style="width: 20px; height: 20px;margin-top: 5%" value="Patient" name="Identification"><br></div>
            <div class = "col-sm-6">
            <label style="margin-left: 12%">Staff</label>
             <input type="checkbox" style="width: 20px; height: 20px;margin-top: 5%" value="Staff" name="Identification"></div>
          </div><br><br><br>
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
                                var url = "SignUp.php?"+query;
                                
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
          
          <form action="Login.php" method="post" id="LoginForm">
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
                                var url = "Login.php?"+query;
                                
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
<!-- modal end -->
<div class = container-fluid>
    <!-- indicators -->
    <div id="carouselExampleIndicators" class="carousel slide">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
</div>
<div class="container-fluid">
  <h2>Carousel Example</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" style="width: 30px;height: 5px" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" style="width: 30px;height: 5px" data-slide-to="1"></li>
      <li data-target="#myCarousel" style="width: 30px;height: 5px" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="Images/images/banner.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3 style = "font-size:4em">TEMP</h3>
          <p style = "font-size:2em">TEMP</p>
        </div>
      </div>
      <div class="item">
        <img src="Images/images/banner1.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3 style = "font-size:4em">TEMP</h3>
          <p style = "font-size:2em">TEMP</p>
        </div>
      </div>
    
      <div class="item">
        <img src="Images/images/banner2.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3 style = "font-size:4em">TEMP</h3>
          <p style = "font-size:2em">TEMP</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
<div style="text-align: center; padding-top: 3%; ">
  <h1><b>Welcome to our world class services</h1>
  <h4 style="letter-spacing: 3px; color: red">We are glad to help you</h4>
</div>
</div>
<div class="container">
  <div class = "col-sm-6" style="padding-top:3%;text-align: justify; "><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div>
  <div class="col-sm-6" style="text-align:center;padding-right: 0%; padding-top: 3%"><img src="Images/images/about.jpg" width="80%"></div>
</div>
<div class = "container-fluid" style="padding-top: 3%">
  <div class = "col-sm-3 nonpad" style = "background-color: black">
    <img class = "img-responsive" style = "opacity:0.2" src="Images/images/g1.jpg">
  </div>
  <div class = "col-sm-3 nonpad" style = "background-color: black">
    <img class = "img-responsive" style = "opacity:0.2" src="Images/images/g2.jpg">
  </div>
  <div class = "col-sm-3 nonpad" style = "background-color: black">
    <img class = "img-responsive" style = "opacity:0.2" src="Images/images/g3.jpg">
  </div>
  <div class = "col-sm-3 nonpad" style = "background-color: black">
    <img class = "img-responsive" style = "opacity:0.2" src="Images/images/g4.jpg">
  </div>
</div>
<div class = "container" style="padding-top: 3%;">
      <div class = "col-sm-6" style="text-align: right">
      <h2 class="w3_heade_tittle_agile">Find a hospital nearby</h2>
      <p class="sub_t_agileits">New in the city? We're glad to help</p>
      </div>
      <div class = "col-sm-6" style="text-align: left; padding-left: 10%"><button class="pulse-button" style = "color:white"><a href="nearbyhospital.html">GO</a></button></div>
</div>
<br><br><br><br>
<?php include("footer.php") ?>
