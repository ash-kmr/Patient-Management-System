<?php

require_once "includes/connection.php";

session_start();

$url = "";

if(isset($_SESSION['url']))
        $url = $_SESSION['url'];
else
        $url = "index.php";
        
        

session_unset();
session_destroy();


header("Location: ".$url);
?>
