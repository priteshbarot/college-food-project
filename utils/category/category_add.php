<?php 
 try {
    include('../connection.php');
    exit;

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if(!$_POST['category_name']){
        echo 'Invalid Request';
        exit;
    }

    $category_name = mysqli_real_escape_string($con,$_POST['category_name']);
    $category_desc = mysqli_real_escape_string($con,$_POST['category_desc']);

    $current_date = date('Y-m-d H:i:s',strtotime('now'));

    $sql = "INSERT INTO categories (category_name,category_desc,created_at,updated_at) VALUES ('$category_name', '$category_desc','$current_date','$current_date')";
    $res = mysqli_query($con,$sql);
    if($res){
        $_SESSION['success'] = ["Category Added Successfully !"];
        header('Location: ../../admin/category/add.php');
    }
  
 } catch (\Throwable $th) {
    print_r($th);
    exit;
 }