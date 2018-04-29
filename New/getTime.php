<?php

        include '../includes/connection.php';

        $Date = $_GET['q'];
        
        //$Date = "2018-4-11";
        $sql = "select slot_id,time_start from slots where slot_id not in( select slot_id from Appointments where doctor_id = 2 and Date = '$Date' union select slot_id from unavailable where doctor_id = 2 and Date = '$Date')";

        $result = $conn->query($sql);
        
        $arr = array();
        if($result){
        
                while(($row = $result->fetch_assoc())){
                
                        $arr[$row['slot_id']] = $row['time_start'];
                
                }
        
        }
        
        $json = json_encode($arr);
        
        echo $json;

?>
