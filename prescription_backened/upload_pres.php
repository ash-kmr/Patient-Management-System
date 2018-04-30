<?php
        include("../includes/connection.php");
	if($_SERVER["REQUEST_METHOD"] == "POST")
				{
					if(isset($_POST['Add']))
					{	
		$d_id = $_SESSION['ID'];
        $P_id = $conn->escape_string($_POST['pid']);
        $diag = $conn->escape_string($_POST['diagnosis']);
        $pres = $conn->escape_string($_POST['pres']);
        //$GST = $conn->escape_string($_POST['Password']);
				    echo "<script>alert('$P_id')</script>";
	
                        //$target_dir = "/home/siddharth/Desktop/PatientManagementSystem/Patient-Management-System/user/UserBills/"; 
		$target_dir = "Prescriptions/";  //enter the destination
        $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		        //echo "<script>alert('$target_file')</script>";
		        
	                			
		if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif" )
			{
				if (is_uploaded_file($_FILES['fileToUpload']['tmp_name']))
					{        
				        move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file);
				        
				        $sql = "insert into Prescription(P_id,diagnosis,prescription,image_url,Doctor_id) values ('".$P_id."','".$diag."','".$pres."','".$target_file."','".$d_id."')";
				        $result = $conn->query($sql);
				        if($result)
							{
								echo '<script>alert("Success")</script>';
				                $page = $_SERVER['REQUEST_URI'];
                                header("Refresh:0; url=$doctor.php");
							}
						else
							{
								//echo '<script>alert("Please Input P_ID correctly")</script>';
				                //$page = $_SERVER['REQUEST_URI'];
                             	echo "<script type='text/javascript'>alert('Please Input P_ID correctly'); window.location='prescription.php'; </script>";
	

							}
			        }
			}
					}
				}
?>
