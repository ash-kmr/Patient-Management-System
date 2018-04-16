<?php

        include 'includes/Connection.php';
        
        if(isset($_GET['q']){
        
                $P_id = $_GET['q'];
                /*Update Query For Appointments*/
                $sql = "select d.first_name as first_name,d.last_name as last_name,a.Date as Date,s.time_start as time_start,d.image_url as image_url from Doctor as d join (Appointments as a join slots as s using(slot_id)) using(doctor_id) where a.P_id = '$P_id' and a.Time >= now()";
                
                $result = $conn->query($sql);
                /*Sample Query for cancelling the appointment    "delete from Appointments where App_ID = id"  location.reload() for reloading*/ 
                
                /*SELECT slot_id,time_start,time_end from slots where slot_id not in (
    select slot_id from Appointments where doctor_id = 3 and Date='2018-04-11' 
    UNION
	select slot_id from unavailable where doctor_id = 3 and Date = '2018-04-11');  for Available slots*/               
        }
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
        
                if($_POST['Submit']){
                
                        $doc_id = explode(" ",$_POST['name']);
                        $first_name = $doc_id[0];
                        $last_name = $doc_id[1];
                        $sql1 = "select doctor_id from Doctor where first_name=".$first_name." and last_name = ".$last_name;
                        $result1 = $conn->query($sql1);
                        $row1 = "":
                        if($result1){
                        
                                $row1 = $result->fetch_assoc();
                        
                        }
                        
                        $doctor_id = $row1['doctor_id'];
                        $Date = $_POST['Date'];
                        $Time = $_POST['time'];
                        $sql2 = "select slot_id from slots where time_start = ".$Time;
                        
                        $result2 = $conn->query($sql2);
                        $row2 = "";
                        if($result2){
                        
                                $row2 = $result->fetch_assoc();
                        
                        }
                        
                        $slot_id = $row2['slot_id'];
                        $sql = "delete from Appointments where doctor_id = ".$doctor_id." and Date = ".$Date." and slot_id = ".$slot_id;
                        if($conn->query($sql) == TRUE){
                                echo "Successfully Deleted Appointment";
                                $page = $_SERVER['PHP_SELF'];
                                header("Refresh: 0; url=$page");
                        }
                }
        
        
        
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
  <script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/bootstrap-material-design.js"></script>
<script src="../assets/js/plugins/moment.min.js"></script>
<script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
<script src="../assets/js/plugins/nouislider.min.js"></script>
<script src="../assets/js/material-kit.js?v=2.0.0"></script>
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
  <div style="padding-left: 0%"><!--<h3>Doctor IMAGE</h3>--></div>
  <div style="padding-left: 0%"><h4><?php echo $row['first_name']."  ".$row['last_name']; ?></h4></div>
  <div style="padding-left: 0%"> <h4><?php echo $row['Date'];?></h4><h4><?php echo $row['time_start']; ?></h4></div>
  <button class="btn btn-alert" style="margin-bottom: 3%" data-toggle="modal" data-target="#myModal">Cancel Appointment</button>
  <!--  Modal Update     -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <form action = "" method="post">
        <label> Name : </label>
        <input type="text" name = "name" readonly><?php echo $row['first_name']."  ".$row['last_name']; ?></input>
        <label> Date of Appointment : </label>
        <input type="text" name = "Date" readonly><?php echo $row['Date'];?></input>
        <label> Time of Appointment : </label>
        <input type="text" name = "time" readonly><?php echo $row['time_start']; ?></input>
        <label> Reason Description : </label>
        <textarea rows="10" cols="50">Enter Your Text Here ...</textarea>
        <div class="modal-footer">
        <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-alert btn-simple" name="Submit">Confirm</button>
      </div>
        <!--<button class="btn btn-alert" style="margin-bottom: 3%" name="Submit">Confirm</button>-->
        </form>
      </div>
      
    </div>
  </div>
</div>
  <!--  Upto Thissss       -->
  </div>
  </div>
  <?php   }
  
   } ?>
  <!-- Upto this -->
  </div>
</body>
</html>
  
  
  
  
