<?php

        include '../includes/connection.php';

        session_start();
        
        $doctor_id = $_SESSION['ID'];
        $data  = array();
        $query = $_SERVER['QUERY_STRING'];
        parse_str($query,$data);
       
        $Date = $data['Date_Appointment'];
        
        $sql = "select slot_id,time_start from slots where slot_id not in( select slot_id from Appointments where doctor_id = '$doctor_id' and Date = '$Date' union select slot_id from unavailable where doctor_id = '$doctor_id' and Date = '$Date')";
        
        $result = $conn->query($sql);
        
        $arr = array();
        if($result){
        
                while(($row = $result->fetch_assoc())){
                
                        $slot_id = $row['slot_id'];
                        $q = "insert into unavailable(doctor_id,slot_id,Date) values ('".$doctor_id."','".$slot_id."','".$Date."')";
                        
                        if($conn->query($q)){
                        
                                $arr['Result'] = 'Success';
                        
                        }else{
                        
                                $arr['Result'] = 'Invalid';
                        
                        }
                
                }
        
        }
        
        $json = json_encode($arr);

        echo $json;

?>
