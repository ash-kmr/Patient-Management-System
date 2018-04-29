<?php

        include 'includes/Connection.php';
        
        if(isset($_GET['q']){
        
                $P_id = $_GET['q'];
                /*Update Query For Appointments*/
                $sql = "select * from Doctor as d join (Appointments as a join slots as s using(slot_id)) using(doctor_id) where a.P_id = '$P_id' and a.Time >= now()";
                
                $result = $conn->query($sql);
                /*Sample Query for cancelling the appointment    "delete from Appointments where App_ID = id"  location.reload() for reloading*/                
        }
        

?>
<!DOCTYPE html>
<html>
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
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
  <link href="assets/css/demo.css" rel="stylesheet" />
  <script src="/assets/js/core/jquery.min.js"></script>
<script src="/assets/js/core/popper.min.js"></script>
<script src="/assets/js/bootstrap-material-design.js"></script>
<script src="/assets/js/plugins/moment.min.js"></script>
<script src="/assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
<script src="/assets/js/plugins/nouislider.min.js"></script>
<script src="/assets/js/material-kit.js?v=2.0.0"></script>
  <link rel="stylesheet" href="BS4/assets/css/material-kit.css">
  <style>
    body{
      background-color:#E5E7E9;
    }
  </style>
</head>
<body>

        <div class = "header">Upcoming appointments</div>
<br><br>

<!-- Repaeat this -->
<?php if($result && $result->num_rows > 0){
        while(($row = $result->fetch_assoc())){
?>
  <div class = "card card-1" style="margin-left: 0%;border-radius: 10px; margin-right: 0%; ">
  <div class = "col-sm-2"><img src="<?php if($row['image_url'] != null)  echo $row['image_url']; ?>"></div>
  <div class="col-sm-10">
  <div style="padding-left: 0%"><h3>Doctor IMAGE</h3></div>
  <div style="padding-left: 0%"><h4><?php echo $row['first_name']."  ".$row['last_name']; ?></h4></div>
  <div style="padding-left: 0%"> <h4><?php ?>Time of Appointment </h4></div>
  <button class="btn btn-info" style="margin-bottom: 3%">Info</button>
  
  </div>
  </div>
  <?php   }
  
   } ?>
  <!-- Upto this -->
  </div>
</body>
</html>
  
  
  
  
