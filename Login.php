<?php

        /*Connection =.php will be included in inncludes folder*/
        include("includes/connection.php");

        session_start();
        $data  = array();
        $query = $_SERVER['QUERY_STRING'];
        
        parse_str($query,$data);
        
        
        
        $username = $data['Email'];
        $password = $data['Password'];	
	$password = md5($password);
        
        $Identification = $data['Identification'];
        
        
        $arr = array();
        
        if($Identification == 'Patient'){
                
                $sql = "select * from Auth_patient join Patient using(P_id) where Auth_patient.email = '".$username."' and password = '".$password."'"; 
                $result = $conn->query($sql);
                           
                if($result->num_rows > 0){
                               
                                        
                        $row  = $result->fetch_assoc();
                                        
                        $_SESSION['login_user'] = $row['first_name']." ".$row['last_name'];
                        $_SESSION['ID'] = $row['P_id'];
                        $_SESSION['Identification'] = 0;
                        $arr['Result'] = 'SuccessUser';
                               
                }else{
                
                
                        $arr['Result'] = 'Invalid';
                }
                
        }else if($Identification == 'Doctor'){
        
        
                $sql = "select * from Auth_doctor join Doctor using(doctor_id) where email = '".$username."' and password = '".$password."'";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                        
                         $row = $result->fetch_assoc();
                         $_SESSION['login_user'] = $row['first_name']." ".$row['last_name'];
                         $_SESSION['ID'] = $row['doctor_id'];
                         $_SESSION['Identification'] = 1;
                        
                         $arr['Result'] = 'SuccessDoctor';        
                }else{
                
                
                        $arr['Result'] = 'Invalid';        
                
                }        
        
        
        }else{
        
                $sql = "select * from Auth_staff join Staff using(staff_id) where Auth_staff.email = '".$username."' and password = '".$password."'";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                        
                         $row = $result->fetch_assoc();
                         $_SESSION['login_user'] = $row['first_name']." ".$row['last_name'];
                         $_SESSION['ID'] = $row['staff_id'];
                         $_SESSION['Identification'] = 2;
                        
                         $arr['Result'] = 'SuccessStaff';        
                }else{
                
                
                        $arr['Result'] = 'Invalid';        
                
                }
        
        
        
        }
        
        
        
        
        
        $json = json_encode($arr);
        echo $json;
        
        
?>
