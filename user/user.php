<?php

        include 'includes/Connection.php';
        
        $username = $_SESSION['login_user'];
        /*
        $sql = "select * from (Patient as p join (Patient_Doctor as pd join Doctor as d using(doctor_id)) using(P_id)),Appointments as a where a.P_id = p.p_id and a.doctor_id = d.doctor_id and p.email = '$username' and a.time >= 'now()'";
        */
        
        $sql = "select * from Patient where email = '$username'";
        $result = $conn->query($sql);
        
        if($result && $result->num_rows>0){
        
                $row = $result->fetch_assoc();
               
        
        }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Balthazar' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Stalinist One' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
  <script src = "../js/jquery.min.js"></script>
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/material-kit.css" rel="stylesheet"/>
  <link href="../assets/css/demo.css" rel="stylesheet" />
  <script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/bootstrap-material-design.js"></script>
<script src="../assets/js/plugins/moment.min.js"></script>
<script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
<script src="../assets/js/plugins/nouislider.min.js"></script>
<script src="../assets/js/material-kit.js?v=2.0.0"></script>
  <link rel="stylesheet" href="BS4/assets/css/material-kit.css">
  <style>
    body{
      background-color:#E5E7E9;
    }
  </style>
</head>
<body bgcolor="maroon">
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
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login-signup/php/signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login-signup/php/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
      </div>
      </div>
      </nav>
</div>

<div class="container-fluid" style="padding-top: 5%;">
  <div class = "container-fluid">
  <!-- HISTORY -->
  <div class = "col-sm-3">
  <div class="card" style="width: 35rem;">
  <img class="card-img-top img-responsive" width="100%" src = "<?php if($row['p.image_url'] == null) echo "images/t3.jpg"; else echo $row['image_url']; ?>" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary" style="width: 45%;margin-left:4%" onclick = "changeIframe(Appointments.php?q=<?php  echo $row['P_id']; ?>)">Appointments</a>
    <a href="#" class="btn btn-primary" style="width: 45%" onclick = "changeIframe(Bills.php?q=<?php  echo $row['P_id']; ?>)">Bills</a>
    <a href="#" class="btn btn-primary" style="width: 45%;margin-left:4%" onclick = "changeIframe(Records.php?q=<?php  echo $row['P_id']; ?>)">Previous Record</a>
    <a href="#" class="btn btn-primary" style="width: 45%" onclick = "changeIframe(Review.php?q=<?php  echo $row['P_id']; ?>)">Reviews</a>
  </div>
  
</div>
  </div>
  <div class = "col-sm-9" style="overflow: auto; max-height: 100vh;">
  <iframe src="usersource.html" width="100%" height="500px" frameborder="0" id="frame"></iframe></div>
  <script>
  
        function changeIframe(x){
        
                document.getElementById('frame').src = x;
                
        }
  </script>
</div>
</body>
