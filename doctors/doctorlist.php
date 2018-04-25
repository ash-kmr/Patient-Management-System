<?php
        include '../includes/connection.php';
        
        if(isset($_GET['q'])){
        
                $dept_name = $_GET['q'];
                
                $sql = "select distinct(doctor_id),first_name,last_name,Doctor.image_url from Doctor join Doctor_department using(doctor_id) where dept_name = '".$dept_name."'"; 
        
                $result = $conn->query($sql);
               
        
        }
        

?>

<!DOCTYPE html>
<html lang="en">
<? include("mainheader.php") ?>
 <div class="banner1 jarallax">
		<div class="container">
		</div>
	</div>

<div class="services-breadcrumb" style="padding-top: 1%">
		<div class="container">
			<ul>
				<li><a href="index.php" style="font-family: Balthazar; font-size: 1.4em">Home</a><i>|</i></li>
				<li style="font-family: Balthazar; font-size: 1.4em"><?php echo $_GET['q']; ?></li>
			</ul>
		</div>
	</div>
</div>
  <div class = "container-fluid">
  <!-- dep name card -->
  <?php if($result && $result->num_rows > 0){
        while(($row = $result->fetch_assoc())){
?>
  <div class="col-sm-3">
  <div class = "card card-1">
  <div style="margin-right: 4%; margin-left: 4%; padding-top: 4%">
  <img width="100%" src="<?php  echo $row['image_url']; ?>">
  <div style="text-align: center;"><h4><a href="doctorbook.html?q=<?php echo $row['doctor_id']?>"><?php  echo $row['first_name']." ".$row['last_name'];  ?></a></h4></div>
  </div>
  </div>
  </div>
  <?php }
     }
  ?>
  <!-- end -->
</div>
</body>
</html>
