<?php

        include '../includes/connection.php';
        
        if(isset($_GET['q']) {
        
                $P_id = $_GET['q'];
                /*Update Query For Appointments*/
                $sql = "select Bill_id, P_id, Reason, Amount, Date from Bill_Details where P_id = '$P_id'";
                
                $result = $conn->query($sql);
                /*Sample Query for cancelling the appointment    "delete from Appointments where App_ID = id"  location.reload() for reloading*/ 
                
                /*SELECT slot_id,time_start,time_end from slots where slot_id not in (
    select slot_id from Appointments where doctor_id = 3 and Date='2018-04-11' 
    UNION
	select slot_id from unavailable where doctor_id = 3 and Date = '2018-04-11');  for Available slots*/               
        }
?>
<?php include("mainheader.php") ?>

        <div class = "header">BILLS</div>
<br><br>

<!-- Repaeat this -->
<?php if($result && $result->num_rows > 0){
        while(($row = $result->fetch_assoc())){
?>
  <div class = "card card-1" style="margin-left: 0%;border-radius: 10px; margin-right: 0%; ">
  <div class = "col-sm-2"><img src="<?php if($row['image_url'] != null)  echo $row['image_url']; ?>"></div>
  <div class="col-sm-10">
  <div style="padding-left: 0%"><h3>Bill ID : <?php echo $row['Bill_id']; ?></h3></div>
  <div style="padding-left: 0%"><h4>Reason : <?php echo $row['Reason']; ?></h4></div>
  <div style="padding-left: 0%"> <h4>Amount : <?php echo $row['Amount'];?></h4></div>
  <button class="btn btn-alert" style="margin-bottom: 3%" data-toggle="modal" data-target="#myModal">Cancel Appointment</button>
  </div>
  </div>
  <?php   }
  
   } ?>
  <!-- Upto this -->
  </div>
</body>
</html>
  
  
  
  
