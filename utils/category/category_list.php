<?php 
 try {
    include('../../utils/connection.php');

  
    $category_list = [];

    $sql = "select * from categories";
    $res = mysqli_query($con,$sql);
    $category_list = $res;
  
 } catch (\Throwable $th) {
    print_r($th);
 }