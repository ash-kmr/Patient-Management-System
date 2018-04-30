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
        
        $arr = array();
        
        $check = "select email from Auth_patient";
        
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
        
        }
        $json = json_encode($arr);
        echo $json;      
        
              
        
?>
