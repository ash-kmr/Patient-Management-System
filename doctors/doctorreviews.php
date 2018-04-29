<?php

        include '../includes/connection.php';
        session_start();
        
        if(isset($_SESSION['ID']) && $_SESSION['Identification'] == 1){
        
                $doctor_id = $_SESSION['ID'];
        
                $sql = "select * from Reviews join Patients using(P_id) where doctor_id = '".$doctor_id."'";
        
                $result = $conn->query($sql);
        
        }


?>
<!DOCTYPE html>
<html>
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
  <script src="/assets/js/core/jquery.min.js"></script>
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
<body>


<div class = "header">Reviews</div>
<br><br>

<!-- Repeat this -->
<?php if($result && $result->num_rows > 0){
        while(($row = $result->fetch_assoc())){
?>
  <div class = "card card-1" style="margin-left: 0%;border-radius: 10px; margin-right: 0%; ">
  <div class = "col-sm-2"><img src="<?php if($row['image_url'] != null)  echo $row['image_url']; else echo '../Images/images/Patient.png'; ?>"></div>
  <div class="col-sm-10">
  <div style="padding-left: 0%"><h3>Patient Name : <?php  echo $row['first_name']." ".$row['last_name'];?></h3></div>
  <div style="padding-left: 0%"><h4>Ratings : <?php  echo $row['Rating']; ?></h4></div>
  <div style="padding-left: 0%"><h4>Text :  <?php echo $row['text']; ?></h4></div>
  
  </div>
  <?php }
     }
  ?>
  <!-- Till This -->
  </body>
</html>
