<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Balthazar' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="css/JiSlider.css">
  <link href='https://fonts.googleapis.com/css?family=Stalinist One' rel='stylesheet'>
  <script src = "js/JiSlider.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
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
      <?php if(isset($_SESSION['login_user'])){ ?>
              <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php   echo $_SESSION['login_user']; ?></a></li>
        <li><a href="login-signup/php/logout.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
        <?php  } else {?>
        <li><a href="login-signup/php/signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login-signup/php/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <?php  } ?>
      </ul>
    </div>
  </div>
</nav> 
</div>
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
  <div class = "col-sm-3">
    <img class = "img-responsive" src="Images/images/g1.jpg">
  </div>
  <div class = "col-sm-3">
    <img class = "img-responsive" src="Images/images/g2.jpg">
  </div>
  <div class = "col-sm-3">
    <img class = "img-responsive" src="Images/images/g3.jpg">
  </div>
  <div class = "col-sm-3">
    <img class = "img-responsive" src="Images/images/g4.jpg">
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

</body>
</html>
