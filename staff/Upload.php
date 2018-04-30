<?php
        include("../includes/connection.php");

        $P_id = $conn->escape_string($_POST['pid']);
        $Reason = $conn->escape_string($_POST['reason']);
        $Amount = $conn->escape_string($_POST['amount']);
        $GST = $conn->escape_string($_POST['Password']);
				    
	
                        //$target_dir = "/home/siddharth/Desktop/PatientManagementSystem/Patient-Management-System/user/UserBills/"; 
        $target_dir = "Images/";   //enter the destination
                        $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
		        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		        //echo "<script>alert('$target_file')</script>";
		        
	                			
			if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif" ){
				if (is_uploaded_file($_FILES['fileToUpload']['tmp_name'])){        
				        move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file);
				        
				        
				        $sql = "insert into Bills_Details(P_id,Reason,Amount,GST,Date,image_url) values ('".$P_id."','".$Reason."','".$Amount."','".$GST."',now(),'".$target_file."')";
				        $result = $conn->query($sql);
				        if($result){
				        
				                echo '<script>alert("Success")</script>';
				                //$page = $_SERVER['REQUEST_URI'];
                                                header("Location: staff.php");
				        
				        }else{
				        
				                echo '<script>alert("Please Input P_ID correctly")</script>';
				                //$page = $_SERVER['REQUEST_URI'];
                                                header("Location: staff.php");
				        
				        }
			        }
			}
        
?>
