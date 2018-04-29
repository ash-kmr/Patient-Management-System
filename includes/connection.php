<?php

  $servername = "localhost";
  $username = "root";
  $passwd = "";
  $dbname = "project";
  
  $conn = new mysqli($servername,$username,$passwd,$dbname);
  if($conn->connect_error){
    die("Connection failed : " . $conn->connect_error);
  }
  else{
  }

?>

