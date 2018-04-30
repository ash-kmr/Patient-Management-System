<?php

        include '../includes/connection.php';

        session_start();
        
        $review_id  = $_GET['q'];
        
        $sql = "delete from Reviews where review_id = '".$review_id."'";
                                
        $ans = $conn->query($sql);
                                
        $data = array();
        if($ans){
        
                $data['Result'] = 'Success';
        }else{
        
                $data['Result'] = 'Failure';
        }

        $json = json_encode($data);
        echo $json;

?>
