<?php

        include '../includes/connection.php';
        
        session_start();
        if(isset($_SESSION['ID']) && $_SESSION['Identification'] == 1){
        
                $doctor_id = $_SESSION['ID'];
        
                $sql = "select * from Doctor where doctor_id = '".$doctor_id."'";
                $result = $conn->query($sql);
                if($result){
                
                        $row = $result->fetch_assoc();
                }
        
        }else{
        
                 header('Location: ../index.php');
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
  <script src="/assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/bootstrap-material-design.js"></script>
<script src="../assets/js/plugins/moment.min.js"></script>
<script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
<script src="../assets/js/plugins/nouislider.min.js"></script>
<script src="../assets/js/material-kit.js?v=2.0.0"></script>
<link href="Calender.css" rel="stylesheet" />
  <script src="Calender.js" type="text/javascript"></script>
  <link rel="stylesheet" href="BS4/assets/css/material-kit.css">
  <style>
    body{
      background-color:#E5E7E9;
    }
  </style>
</head>
<body bgcolor="maroon">
<?php  include 'mainheader.php';?>

<div class="container-fluid" style="padding-top: 5%;">
  <div class = "container-fluid">
  <!-- HISTORY -->
  <div class = "col-sm-3">
  <div class="card" style="width: 35rem;">
  <img class="card-img-top img-responsive" width="100%" src="<?php  if($row['image_url'] == null) echo '../Images/images/t3.jpg'; else echo $row['image_url']; ?>" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title"><?php   echo $row['first_name']." ".$row['last_name'];?></h4>
    <p class="card-text"></p>
    <a href="doctorappointments.php?q=<?php  echo $row['doctor_id']; ?>" target = "frame" class="btn btn-primary" style="width: 45%;margin-left:4%">Appointments</a>
    <a href="doctorprofile.php?q=<?php  echo $row['doctor_id']; ?>" class="btn btn-primary" style="width: 45%;margin-left:4%">Update Profile</a>
    <a href="doctorreviews.php?q=<?php  echo $row['doctor_id']; ?>" target = "frame" class="btn btn-primary" style="width: 45%">Reviews</a>
    <a href="#" data-toggle= "modal" data-target = "#myModal_Cancel" class="btn btn-primary" style="width: 45%">Cancel Slots</a>
  </div>
</div>
  </div>
          
  <div class = "col-sm-9" style="overflow: auto; max-height: 100vh;">
  <iframe name="frame" src="doctorappointments.php?q=<?php  echo $row['doctor_id']; ?>" width="100%" height="600px" frameborder="0"></iframe></div>
</div></div>
<div class="modal fade" id="myModal_Cancel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Book Appointment with this Doctor</h4>
              </div>
              <div class = "modal-body">
                        <div class="month">      
                          <ul>
                            <li class="prev"><button style="background:inherit;color:inherit;border:0;font-size:inherit;cursor:pointer" onclick="getPrev()">&#10094;</button></li>
                            <li class="next"><button style="background:inherit;color:inherit;border:0;font-size:inherit;cursor:pointer" onclick="getNext()">&#10095;</button></li>
                            <li id = "monthName">
                             March</li><br>
                             <li id = "Date">23</li><br>
                              <span style="font-size:18px" id="Year">2018</span>
                         
                          </ul>
                        </div>

                        <ul class="weekdays">
                          <li>Mo</li>
                          <li>Tu</li>
                          <li>We</li>
                          <li>Th</li>
                          <li>Fr</li>
                          <li>Sa</li>
                          <li>Su</li>
                        </ul>

                        <ul class="days" id="list-Days">  

                        </ul>

                        <p id="Natural"></p>
                        <form action="CancelSlot.php" method="post" id="Cancel">
                        
                                <input type = "hidden" id="Date_Appointment" name = "Date_Appointment" readonly/>
                                <!--<input type = "hidden" id="Slot_ID" name = "Slot_ID" readonly/>-->
                                <div class="field-warp" id="unique">
                                
                                </div>
                                <textarea class="form-control" name="Reason" placeholder="Enter Your Reason" rows="5"></textarea>
                                <div class="modal-footer">
                                        <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
                                        <button type = "submit"  value = "Book"  class="btn btn-alert btn-simple" name="Book">Confirm</button>
                                </div>
                        
                        </form>
                        <script>

                                var MonthName = document.getElementById("monthName").innerHTML;
                                var Year      = document.getElementById("Year").innerHTML;
                                showDates(MonthName,Year);
                        </script>
                        <script>
  
                                $(document).ready(function(){
                                
                                        $("#Cancel").submit(function(obj){
                                        
                                                 var query = $("#Cancel").serialize();
                                                //alert(query);
                                                var url = "CancelSlot.php?"+query;
                                
                                                //alert(url);
                                                $.getJSON(url,function(json){
                                                        var Key = Object.keys(json)[0];
                                                        /*
                                                        Key.forEach(function(key) {
                                        
                                        
                                                                alert(key+"="+json[key]);
                                                        });*/
                                                        
                                                        if(json[Key] == 'Invalid'){
                                        
                                                                alert('Failure');
                                                                //$("#invalidLogin").css("opacity","1");
                                                
                                                //alert('Invalid Username or Password');
                                        
                                                        }else{
                                        
                                                                alert('Success fully Added in Unavailable');
                                                                location.reload();
                                        
                                                        }
                                                });
                                        });
                                });
                        </script>
                        
              </div>
             </div></div>
</body>


