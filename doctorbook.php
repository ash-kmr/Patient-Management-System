<!--

Showing Reviews Query as : 
Select first_name,last_name,image_url,Rating,text from Reviews join Patient using(P_id) where doctor_id = 1;
-->
<?php
        include 'includes/connection.php';
        session_start();
        
        
        $_SESSION['url'] = $_SESSION['REQUEST_URI'];
        //$result = "";
        if(isset($_GET['q'])){
        
                $doctor_id = $_GET['q'];
                $_SESSION['Doctor_ID'] = $doctor_id;
                
                $DoctorInfo = "select * from Doctor where doctor_id = '".$doctor_id."'";
                
                $ResultDoctor = $conn->query($DoctorInfo);
                
                $Result = $ResultDoctor->fetch_assoc();
                
                $review = "select * from Reviews join Patient using(P_id) where doctor_id = '".$doctor_id."'";
                
                $result = $conn->query($review);
                
        
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                
                        if(isset($_POST['Review'])){
                        
                                $Rating = $conn->escape_string($_POST['Ratings']);        
                        
                                $Desc = $conn->escape_string($_POST['Description']);
                                
                                $P_id = $_SESSION['ID'];
                        
                                $sql = "insert into Reviews(doctor_id,text,Rating,P_id) values ('".$doctor_id."','".$Desc."','".$Rating."','".$P_id."')";
                                
                                $ans = $conn->query($sql);
                                
                                if($ans){
                                
                                        $page = $_SERVER['REQUEST_URI'];
                                        header("Refresh:0; url=$page");
                                
                                }
                        }else if(isset($_POST['CancelReview'])){
                        
                                $Review_id = $conn->escape_string($_POST['ReviewID']);
                                
                                $sql = "delete from Reviews where review_id = '".$Review_id."'";
                                
                                $ans = $conn->query($sql);
                                if($ans){
                                
                                        $page = $_SERVER['REQUEST_URI'];
                                        header("Refresh:0; url=$page");
                                
                                }
                        }else if(isset($_POST['Book'])){
                        
                                //
                               $P_id = $_SESSION['ID'];
                               $Doc = $doctor_id;
                               $Date = $conn->escape_string($_POST['Date_Appointment']);
                               $slot_id = $conn->escape_string($_POST['Slot_ID']);
                        
                                $sql = "insert into Appointments(P_id,doctor_id,Date,slot_id) values ('".$P_id."','".$Doc."','".$Date."','".$slot_id."')";
                                
                                $ans = $conn->query($sql);
                                //echo "<script> alert('$Date') </script>";
                                if($ans){
                                
                                        echo "<script>alert('Success')</script>";
                                        $page = $_SERVER['REQUEST_URI'];
                                        header("Refresh:0; url=$page");
                                
                                
                                }
                        }else{
                        
                        
                                //echo "<script> alert('Wrong Daat')</script>";
                        
                        }
        
        
        
                }
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css'>
  <link href='https://fonts.googleapis.com/css?family=Balthazar' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Stalinist One' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
<script src="assets/js/material-kit.js?v=2.0.0"></script>
  <script src = "js/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./doctors/star.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
  <script src="assets/js/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="assets/js/material.min.js"></script>
  <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
  <link href="assets/css/demo.css" rel="stylesheet" />
  <link href="Calender.css" rel="stylesheet" />
  <script src="Calender.js" type="text/javascript"></script>
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
  <!-- star rating js -->
  <script type="text/javascript">
    $(document).ready(function(){
  
  /* 1. Visualizing things on Hover - See next part for action on click */
  $('#stars li').on('mouseover', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
   
    // Now highlight all the stars that's not after the current hovered star
    $(this).parent().children('li.star').each(function(e){
      if (e < onStar) {
        $(this).addClass('hover');
      }
      else {
        $(this).removeClass('hover');
      }
    });
    
  }).on('mouseout', function(){
    $(this).parent().children('li.star').each(function(e){
      $(this).removeClass('hover');
    });
  });
  
  
  /* 2. Action to perform on click */
  $('#stars li').on('click', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently selected
    var stars = $(this).parent().children('li.star');
    
    for (i = 0; i < stars.length; i++) {
      $(stars[i]).removeClass('selected');
    }
    
    for (i = 0; i < onStar; i++) {
      $(stars[i]).addClass('selected');
    }
    
    // JUST RESPONSE (Not needed)
    var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
    $("#Ratings").val(ratingValue);
        //alert(ratingValue);

    
  });
  
  
});
  </script>
 <!-- Create number of stars required --> 
  <script>

function createStar(){

                $(document).ready(function(){

                        
                       $(".stars_id").each(function(){ 
                       
                                var onStar = $(this).attr('class')[0];
                                //alert(onStar);
                                
                                var stars = $(this).children('li.star');
                                    
                                   
                                    
                                    for (i = 0; i < onStar; i++) {
                                      $(stars[i]).addClass('selected');
                                    }
                            
                            
                            });
                });
                           
}
</script>
  <!-- star rating js -->
</head>

<body>
<!--
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
        <li><a href="../login-signup/php/signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="../login-signup/php/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
      </div>
      </div>
      </nav>
      </div>
-->
<?php include "mainheader.php"; ?>


<div class="banner1 jarallax">
	</div>
<div class="services-breadcrumb">
		<div class="container">
			<ul>
				<li><a href="../index.php" style="font-family: Balthazar; font-size: 1.4em">Home</a><i>|</i></li>
				<li style="font-family: Balthazar; font-size: 1.4em">Departments</li>
			</ul>
		</div>
	</div>
</div>
<br>
  <div class = "container">
  <!-- dep name card -->
  <div class = "col-sm-3">
  <img class = "img-rounded img-responsive img-raised" src="<?php if($Result['image_url'] == null) echo 'Images/images/doc.jpg' ; else echo $Result['image_url'];?>"></div>
  <div class = "col-sm-9"><h3><?php echo $Result['first_name']." ".$Result['last_name'];  ?></h3></div>
  <div class = "col-sm-9"><h3>Doctor BIO:</h3></div>
  <div class = "col-sm-9"><h3>Doctor Education:</h3></div>
  <div class = "col-sm-9"><h3>Doctor Specialization:</h3></div>
  <div class = "col-sm-9"><button class="btn btn-alert" style="margin-bottom: 3%" onclick="myFunctionBook(this)">Book AppointMent</button></div>
  </div>
  <div class = "container">
    <h3>Reviews</h3>
    <br>
    <hr>
    <?php if($result && $result->num_rows > 0){
        while(($row = $result->fetch_assoc())){
?>


        <h4><?php  echo $row['first_name']." ".$row['last_name']; ?></h4>
        <!-- Edit Here -->
    <!-- <h4><?php   echo $row['Rating']?></h4> -->
    <div class='rating-stars text-center'>
                <ul class="<?php echo $row['Rating']; ?> stars_id">
                    <li class='star' title='Poor' data-value='1'>
                      <i class='fa fa-star fa-fw'></i>
                    </li>
                    <li class='star' title='Fair' data-value='2'>
                      <i class='fa fa-star fa-fw'></i>
                    </li>
                    <li class='star' title='Good' data-value='3'>
                      <i class='fa fa-star fa-fw'></i>
                    </li>
                    <li class='star' title='Excellent' data-value='4'>
                      <i class='fa fa-star fa-fw'></i>
                    </li>
                    <li class='star' title='WOW!!!' data-value='5'>
                      <i class='fa fa-star fa-fw'></i>
                    </li>
                  </ul>
       </div>
    <!-- ------------------------------------------- -->
    <h4><?php  if($row['text'] == null) echo 'lorem adsklfna;sdfnaldsnadl;ndskv n;ewirgnwa;eldkvnslv dz/.sv a;fwje;ofenaksldgnvdslv .zxc,v sd/fm.ewaofj';
    else echo $row['text'] ?></h4>
    <hr>
    
    <?php if(isset($_SESSION['ID'])){  ?>
    
        <?php if($_SESSION['ID'] == $row['P_id']) {?>
        
                <button id= "<?php echo $row['review_id'];?>" class="btn btn-alert" style="margin-bottom: 3%" onclick="CancelReview(this)">Cancel Review</button>
        
        <?php } ?>
    
    <?php } ?>
    <?php
        }
        
                }
    
    ?>
    <script>
                  
                        createStar();
                  </script>
    <div class="modal fade" id="myModal_Cancel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
              </div>
              <form action="" method="post">
              
                <input id="ReviewID" name="ReviewID" type="hidden" />
              
              <div class="modal-footer">
                <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
                <button type = "submit"  value = "CancelReview"  class="btn btn-alert btn-simple" name="CancelReview">Confirm</button>
              </div>
              </form>
             </div>
            </div>
    </div>
    
    <script>
    
        function CancelReview(x){
        
                var Review = x.getAttribute('id');
                
                document.getElementById('ReviewID').value = Review;
                x.setAttribute("data-target","#myModal_Cancel");
                x.setAttribute("data-toggle","modal");
        
        
        }
    
    </script>
    <!--
    <h4>username stars</h4>
    <h4>lorem adsklfna;sdfnaldsnadl;ndskv n;ewirgnwa;eldkvnslv dz/.sv a;fwje;ofenaksldgnvdslv .zxc,v sd/fm.ewaofj</h4>
    <hr>
    <h4>username stars</h4>
    <h4>lorem adsklfna;sdfnaldsnadl;ndskv n;ewirgnwa;eldkvnslv dz/.sv a;fwje;ofenaksldgnvdslv .zxc,v sd/fm.ewaofj</h4>
    <hr>
    <h4>username stars</h4>
    <h4>lorem adsklfna;sdfnaldsnadl;ndskv n;ewirgnwa;eldkvnslv dz/.sv a;fwje;ofenaksldgnvdslv .zxc,v sd/fm.ewaofj</h4>
    <hr>
    <h4>username stars</h4>
    <h4>lorem adsklfna;sdfnaldsnadl;ndskv n;ewirgnwa;eldkvnslv dz/.sv a;fwje;ofenaksldgnvdslv .zxc,v sd/fm.ewaofj</h4>
    <hr>
    <h4>username stars</h4>
    <h4>lorem adsklfna;sdfnaldsnadl;ndskv n;ewirgnwa;eldkvnslv dz/.sv a;fwje;ofenaksldgnvdslv .zxc,v sd/fm.ewaofj</h4>
    <hr>
    <h4>username stars</h4>
    <h4>lorem adsklfna;sdfnaldsnadl;ndskv n;ewirgnwa;eldkvnslv dz/.sv a;fwje;ofenaksldgnvdslv .zxc,v sd/fm.ewaofj</h4>
    <hr>
    -->
  </div>
  <div class = "container">
    <button class="btn btn-alert" style="margin-bottom: 3%" onclick="myFunction(this)">Add a Review</button>
    <script>
  
        function myFunction(x){
        
                if(<?php if(isset($_SESSION['ID'])) echo 1; else echo 0; ?>){
					//alert("assa")
                        x.setAttribute("data-target","#myModal_Review");
                        x.setAttribute("data-toggle","modal");
                        
                        
                }else{
                
                        document.getElementById("Login/Signup").click();
                
                }
        
        
        
        }
        
  </script>
        <!-- Review Modal -->
        <div class="modal fade" id="myModal_Review" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
              </div>
              
              <div class="modal-body">
              <form action="" method="post">
                <div class='rating-stars text-center'>
                  <ul id='stars'>
                    <li class='star' title='Poor' data-value='1'>
                      <i class='fa fa-star fa-fw'></i>
                    </li>
                    <li class='star' title='Fair' data-value='2'>
                      <i class='fa fa-star fa-fw'></i>
                    </li>
                    <li class='star' title='Good' data-value='3'>
                      <i class='fa fa-star fa-fw'></i>
                    </li>
                    <li class='star' title='Excellent' data-value='4'>
                      <i class='fa fa-star fa-fw'></i>
                    </li>
                    <li class='star' title='WOW!!!' data-value='5'>
                      <i class='fa fa-star fa-fw'></i>
                    </li>
                  </ul>
                </div>
                <textarea class="form-control" name="Description" placeholder="Here can be your nice text" rows="5"></textarea>
                <input type = "hidden" id="Ratings" name = "Ratings" value = 0 readonly/>
                <div class="modal-footer">
                <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
                <button type = "submit"  value = "Review"  class="btn btn-alert btn-simple" name="Review">Confirm</button>
              </div>
              </form>
              </div>
                <!--<button class="btn btn-alert" style="margin-bottom: 3%" name="Submit">Confirm</button>-->
                
              </div>  
            </div>
          </div>
          <!-- End of Review Modal -->
          <!-- Start of Review Modal Book -->
          <div class="modal fade" id="myModal_Book" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
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
                        <form action="" method="post">
                        
                                <input type = "hidden" id="Date_Appointment" name = "Date_Appointment" readonly/>
                                <input type = "hidden" id="Slot_ID" name = "Slot_ID" readonly/>
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
              
                        
              </div>
             </div>
             <script>

  
        function myFunctionBook(x){
        
                if(<?php if(isset($_SESSION['ID'])) echo 1; else echo 0; ?>){
					//alert("assa")
                        x.setAttribute("data-target","#myModal_Book");
                        x.setAttribute("data-toggle","modal");
                        
                        
                }else{
                
                        document.getElementById("Login/Signup").click();
                
                }
        
        
        
        }
        
  </script>
          </div>
          </div>
        </div>
  </div>
  <!-- end -->
</body>
</html>
