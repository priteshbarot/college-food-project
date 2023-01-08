<?php
error_reporting(0);

try {
    
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "food_project";
    
    $con = mysqli_connect($server,$user,$pass,$db);
    if(!$con){
        echo "Connection Unsuccessful".mysqli_connect_error();
    }

    session_start();
    
} catch (\Throwable $th) {
    print_r($th);
    exit;
}