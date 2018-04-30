<?php
//echo "<script>alert('entered as'); </script>";
include '../includes/connection.php';
session_start();
if(isset($_SESSION['ID']) && $_SESSION['Identification'] == 0){

        $P_id = $_GET['q'];
        $Sample = "select * from Patient where P_id = '".$P_id."'";
        $result = $conn->query($Sample);
        if($result->num_rows > 0){
        
                $row = $result->fetch_assoc();
                //$ImageFile = substr($row['image_url'],7);
        
        }
        
if($_SERVER["REQUEST_METHOD"] == "POST")
				{
					if($_POST['update'])
						{
							$id = $_GET['q'];
							
							//echo "<script>alert('entered as'); </script>";
							include("../includes/connection.php");

							$target_dir = "Images/";    //enter the destination
							if($_FILES["fileToUpload"]["name"]){
							        $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
							
							$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				
							if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif" )
								{
									if (is_uploaded_file($_FILES['fileToUpload']['tmp_name']))
										{        
											move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file);
											//echo 'moved file to destination directory';
										}
								}
                                                        }else{
                                                        
                                                                $target_file = $row['image_url'];
                                                        }
							$firstname = $conn->escape_string($_POST['firstname']);
							$lastname = $conn->escape_string($_POST['lastname']);
							$address = $conn->escape_string($_POST['address']);
							$phone = $conn->escape_string($_POST['phone']);
							//$aa= $firstname." ".$lastname." ".$address." ".$phone;
							//echo "<script type='text/javascript'>alert('$aa');</script>";
							
							$sql = "update Patient set first_name = '".$firstname."',last_name = '".$lastname."',address = '".$address."', phone = '".$phone."' ,image_url='".$target_file."' where P_id = '".$id."'";
							if($conn->query($sql))
							{
								echo "<script type='text/javascript'>alert('Updated Successfully');</script>";
								header('Location: user.php');
							}
							else
							{
								echo "<script type='text/javascript'>alert('Failure in Update');</script>";
								$page = $_SERVER['REQUEST_URI'];
                                                                header("Refresh:0; url=$page");
							}
						}
				}
}else{

        header('Location: ../index.php');
}	
?>




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
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/material-kit.css" rel="stylesheet"/>
<script src="../assets/js/material-kit.js?v=2.0.0"></script>
  <script src = "../js/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="star.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/navbar.css">
  <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
  <script src="../assets/js/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/material.min.js"></script>
  <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/material-kit.css" rel="stylesheet"/>
  <link href="../assets/css/demo.css" rel="stylesheet" />
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
  <!-- star rating js -->
  </head>
<body>
<script type="text/javascript">
	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>


<div class = "container" style="margin-top: 10%; margin-bottom: 10%; background-color: #EFF6F9; width: wrap-content; height: wrap-content; border-radius: 20px">
<div class = "container-fluid" style="margin-top: 10%; margin-bottom: 10%">
	
	<form action="" method = "post"  enctype="multipart/form-data">
	<div class = "col-sm-1"></div>
	<div class="col-sm-4">
		<img id = "blah" class="img-responsive" src="<?php if($row['image_url'] == null) echo '../Images/images/t3.jpg'; else echo $row['image_url'];?>">
		<br><br><br>
		<input type="file" name="fileToUpload" id="fileToUpload" onchange="readURL(this);">
		 
	</div>
	
	<div class = "col-sm-1"></div>
	<div class = "col-sm-6">
		<h2>Edit profile information</h2>
		
			<div class="form-group label-floating">
				<label class="control-label" style="font-size:1.2em">First Name</label>
				<input type="text" class="form-control" name = 'firstname' value = <?php echo $row['first_name'] ?> >
			</div>
			<div class="form-group label-floating">
				<label class="control-label" style="font-size:1.2em">Last Name</label>
				<input type="text" class="form-control" name = 'lastname' value = <?php echo $row['last_name'] ?> >
			</div>
			<div class="form-group label-floating">
				<label class="control-label" style="font-size:1.2em">Address</label>
				<input type="text" class="form-control" name = 'address' value = <?php echo $row['address'] ?> >
			</div>
			<div class="form-group label-floating">
				<label class="control-label" style="font-size:1.2em">Phone Number</label>
				<input type="number" class="form-control" name = 'phone' value = <?php echo $row['phone'] ?> >
			</div>
			<input type = 'submit' name = 'update' class="btn btn-info">Save changes</button>
		
	</div>
	</form>
	</div>
	
</div>
