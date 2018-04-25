<!--

Showing Reviews Query as : 
Select first_name,last_name,image_url,Rating,text from Reviews join Patient using(P_id) where doctor_id = 1;
-->
<?php

        include 'includes/connection.php';
        
        session_start();
        
        $_SESSION['url'] = $_SERVER['REQUEST_URI'];
        $row = null;
        
        //if(isset($_GET['q'])){
        
                $doctor_id = $_GET['q'];
                $doctor_id = 1;
				/*
                $sql = "select Patient.first_name,Patient.last_name,Reviews.Rating,Reviews.text from Doctor join (Reviews join Patient using(P_id)) using(doctor_id) where doctor_id = ".$doctor_id;
                */
                $sql = "select * from Doctor where doctor_id = ".$doctor_id;
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
        
				$sql1 = "select patient.first_name,patient.last_name,reviews.star,reviews.text from reviews inner join patient on reviews.P_id = patient.P_id where doctor_id = ".$doctor_id;
				$review = $conn->query($sql1);    

				$url = $row['image_url'];
				$image = base64_encode(file_get_contents($url));				
				
	   //}
        
			if($_SERVER["REQUEST_METHOD"] == "POST")
				{
					if($_POST['submit'])
						{
							$p_id = 1;	
							$sql = "select * from patient where P_id = ".$p_id;
								$text = $conn->escape_string($_POST['description']);
							echo "sadsadadadasdadasd";
								$sql = "insert into reviews(doctor_id,text,P_id) values('".$doctor_id."', '".$text."' , '".$p_id."')";
								$conn->query($sql);					
								echo "asdsdasd";
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
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Balthazar' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="css/JiSlider.css">
  <link href='https://fonts.googleapis.com/css?family=Stalinist One' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
  <script src = "js/jquery.min.js"></script>
  <script src = "Calender.js"></script>
 
  <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>

  <link rel="stylesheet" type="text/css" href="stars.css">
  <link rel="stylesheet" href="css/doctor_book.css">  <!-- css file included -->
  
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
    
  });
  
  
});
  </script>
  <!-- star rating js -->

  
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
      <a class="navbar-brand" style = "color:black; font-size:1.5em" href="#">WebSiteName</a>
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
       <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php   echo $_SESSION['login_user']; ?></a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
      <?php  }else{ ?>
        <li><a href="./PHP-login_sign_up/sign_up.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="./PHP-login_sign_up/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <?php   } ?>
      </ul>
      </div>
      </div>
      </nav>
 <div class="banner1 jarallax">
		<div class="container">
		</div>
	</div>

<div class="services-breadcrumb" style="padding-top: 1%">
		<div class="container">
			<ul>
				<li><a href="index.html" style="font-family: Balthazar; font-size: 1.4em">Home</a><i>|</i></li>
				<li style="font-family: Balthazar; font-size: 1.4em">Departments</li>
			</ul>
		</div>
	</div>
</div>
<br>
  <div class = "container">
  <!-- dep name card -->
  <div class = "col-sm-3">
  
  <img class = "img-rounded img-responsive img-raised"  <img src="data:image/x-icon;base64,<?= $image ?>"> ></div>
  <div class = "col-sm-9"><h3>Doctor Name : <?php echo $row['first_name']." ".$row['last_name']; ?></h3></div>
  <div class = "col-sm-9"><h3>Doctor BIO:</h3></div>
  <div class = "col-sm-9"><h3>Doctor Education:</h3></div>
  <div class = "col-sm-9"><h3>Doctor Specialization:</h3></div>
  <div class = "col-sm-9"><button onclick="myFunction(this)">Book appointment</button></div>
  <script>
  
        function myFunction(x){
        
                if(<?php if(isset($_SESSION['login_user'])) echo 1; else echo 0; ?>){
					//alert("assa")
                        x.setAttribute("data-target","#myModal_book");
                        x.setAttribute("data-toggle","modal");
                        
                        
                }else{
                
                        window.location="./PHP-login_sign_up/login.php";
                
                }
        
        
        
        }
        
  </script>
  </div>
  <div class = "container">
    <h3>Reviews</h3>
    <br>
    
	<?php while(($row2 = $review->fetch_assoc())){
?>
	
	<hr>
    <h4><?php  echo "  Name : ".$row2['first_name']."  ".$row2['last_name'] ;          echo "       Stars : ".$row2['star'];  ?></h4>
    <h4> <?php  echo "Remarks : ".$row2['text'];  ?></h4>
    <hr>
     <?php }
     
  ?>
	
  </div>
  <div class = "container">
    <button class="btn btn-alert" style="margin-bottom: 3%" data-toggle="modal" data-target="#myModal">Add a Review</button>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
              </div>
              <div class="modal-body">
                
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
				
				
				<form action = "" method="post">
                <label> Name : </label>
                <input type="text" name = "name" placeholder = "Enter Your Name"></input>
                <label> Description : </label>
                
				<textarea name= "description" class = 'form-control' rows="10" cols="50">Enter Your Text Here ...</textarea>
                <div class="modal-footer">
                <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
                <button type = "submit"  value = "submit"  class="btn btn-alert btn-simple" name="submit">Confirm</button>
              </div>
                <!--<button class="btn btn-alert" style="margin-bottom: 3%" name="Submit">Confirm</button>-->
                </form>
              </div>  
            </div>
          </div>
        </div>
  </div>
  
  <!----book appointments-->
 <div class = "container">
    <!--<button class="btn btn-alert" style="margin-bottom: 3%" data-toggle="modal" data-target="#myModal_book">book </button>-->
        <div class="modal fade" id="myModal_book" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
              </div>
              <div class="modal-body">
			  <!--
                <form action = "" method="post">
                <label> Name : </label>
                <input type="text" name = "name" placeholder = "Enter Your Name"></input>
                
                <label> Description : </label>
                <textarea name= "description" class = 'form-control' rows="10" cols="50">Enter Your Text Here ...</textarea>
                <div class="modal-footer">
                <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
                <button type = "submit"  value = "submit"  class="btn btn-alert btn-simple" name="submit">Confirm</button>
              </div>
                <!--<button class="btn btn-alert" style="margin-bottom: 3%" name="Submit">Confirm</button>
                </form>-->
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

					<ul class="weekdays" >
					  <li>Mo</li>
					  
					  <li style = "margin-left : -2px">Tu</li>
					  <li style = "margin-left : -2px">We</li> 
					  <li style = "margin-left : -2px">Th</li>
					  <li style = "margin-left : -2px">Fr</li>
					  <li style = "margin-left : -2px">Sa</li>
					  <li>Su</li>
					  
					</ul>

					<ul class="days" id="list-Days">  

					</ul>

					<p id="demo"></p>

					<script>
							var MonthName = document.getElementById("monthName").innerHTML;
							var Year      = document.getElementById("Year").innerHTML;
							showDates(MonthName,Year);
					</script>
              </div>  
            </div>
          </div>
        </div>
  </div

  
  <!-- end -->
</body>
</html>
