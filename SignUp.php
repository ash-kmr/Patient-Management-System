<?php

        /*Connection =.php will be included in inncludes folder*/
        include("includes/connection.php");

        session_start();
        $data  = array();
        $query = $_SERVER['QUERY_STRING'];
        
        parse_str($query,$data);
        
        $First_Name = $data['First_Name'];
        $Last_Name = $data['Last_Name'];
        $Email = $data['Email'];
        $Password = $data['Password'];
        $Mobile_no = $data['mobile_no'];
        $Address = $data['address'];
        $Identification = $data['Identification']; 
        //echo "<script>alert('".$Email."')</script>";
        
                                                $otp = 	rand();
						$date = date('Y-m-d H:i:s');
						
						$_SESSION['email_1'] =  $Email;
						$_SESSION['otp_2'] = $otp;
						
							$_SESSION['first_name'] = $First_Name;
							$_SESSION['last_name'] = $Last_Name;
					//	$_SESSION['email_1'] = $conn->escape_string($_POST['Email']);
						        $_SESSION['password']= $Password;
							$_SESSION['mobile_no'] = $Mobile_no;
							$_SESSION['address'] = $Address;
							$_SESSION['Repr'] = $Identification;
							/*
						$aa=$_SESSION['last_name'];
						echo "<script>alert('$aa'); </script>";
						*/
						//$delete = "delete from verify_email where email='".$Email."'";
						//$conn->query($delete);
						
						$qy = "insert into verify_email(email,date,otp) values('".$Email."','".$date."','".$otp."')";
						$conn->query($qy);
						// window.location.href='sign_mail.php';
						header("location:sign_mail.php");
        /*
        $data  = array();
        $query = $_SERVER['QUERY_STRING'];
        
        parse_str($query,$data);
        
        $First_Name = $data['First_Name'];
        $Last_Name = $data['Last_Name'];
        $Email = $data['Email'];
        $Password = $data['Password'];
        $Mobile_no = $data['mobile_no'];
        $Address = $data['address'];
        $Identification = $data['Identification']; 
        
        $arr = array();
        
        $check = "select email from Auth_patient UNION SELECT email from Auth_staff";
        
        $EmailValid = $conn->query($check);
        $count = 0;
        if($EmailValid->num_rows > 0){
        
                while($email = $EmailValid->fetch_assoc()){
                
                        if($email['email'] == $Email){       
                                $arr['Result'] = 'Invalid';
                                $count = 1;
                        }
                
                
                }
        }
        
        if($count == 0){
                if($Identification == 'Patient'){
                
                        $sql = "insert into Patient(first_name,last_name,phone,email,address) values('".$First_Name."','".$Last_Name."','".$Mobile_no."','".$Email."','".$Address."')";
                                        
                                        
                                   
                                        if ($conn->query($sql)){
                                                
                                        
                                                $Password = md5($Password);
                                                $Patient = "select P_id from Patient where email = '".$Email."' and first_name = '".$First_Name."' and last_name = '".$Last_Name."'";
                                        
                                                $result = $conn->query($Patient);
                                                if($result->num_rows > 0){
                                                        
                                                        $row_Sign = $result->fetch_assoc();
                                                        $P_id = $row_Sign['P_id'];
                                                        $auth_p = "insert into Auth_patient(email,password,P_id) values('".$Email."', '".$Password."' , '".$P_id."')";
                                                        if($conn->query($auth_p)){
                                                        
                                                                //echo '<script>alert("Hello")</script>';
                                                                
                                                                $_SESSION['login_user'] = $First_Name;
                                                                $_SESSION['ID'] = $P_id;
                                                                $_SESSION['Identification'] = 0;
                                                                $arr['Result'] = 'Success';
                                                               //echo '<script>alert("Hello");</script>';
                                                                //header('Location: '.$_SERVER['REQUEST_URI']);
                                                        
                                                        
                                                        }                                
                                                }
                                        
                                        }
                }else{
                
                        $sql = "insert into Staff(first_name,last_name,phone,email,address) values('".$First_Name."','".$Last_Name."','".$Mobile_no."','".$Email."','".$Address."')";
                                        
                                        
                                   
                                        if ($conn->query($sql)){
                                                
                                        
                                                $Password = md5($Password);
                                                $Patient = "select staff_id from Staff where email = '".$Email."' and first_name = '".$First_Name."' and last_name = '".$Last_Name."'";
                                        
                                                $result = $conn->query($Patient);
                                                if($result->num_rows > 0){
                                                        
                                                        $row_Sign = $result->fetch_assoc();
                                                        $P_id = $row_Sign['staff_id'];
                                                        $auth_p = "insert into Auth_staff(email,password,staff_id) values('".$Email."', '".$Password."' , '".$P_id."')";
                                                        if($conn->query($auth_p)){
                                                        
                                                                //echo '<script>alert("Hello")</script>';
                                                                
                                                                $_SESSION['login_user'] = $First_Name;
                                                                $_SESSION['ID'] = $P_id;
                                                                $_SESSION['Identification'] = 2;
                                                                $arr['Result'] = 'Success';
                                                               //echo '<script>alert("Hello");</script>';
                                                                //header('Location: '.$_SERVER['REQUEST_URI']);
                                                        
                                                        
                                                        }                                
                                                }
                                        
                                        }
                
                
                
                
                }
        }*/
         
        
              
        
?>
