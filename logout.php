<?php

require_once "includes/connection.php";

session_start();

$url = $_SERVER['HTTP_REFERER'];
        
        

session_unset();
session_destroy();


header("Location: ".$url);
?>
