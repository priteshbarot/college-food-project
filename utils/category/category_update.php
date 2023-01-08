<?php 
 try {
    include('../connection.php');

    $category_id = mysqli_real_escape_string($con,$_POST['id']);
    $category_name = mysqli_real_escape_string($con,$_POST['category_name']);
    $category_desc = mysqli_real_escape_string($con,$_POST['category_desc']);

    $sql = "update categories set category_name = "."'$category_name'".", category_desc = "."'$category_desc'"." where id = ".$category_id;
    $res = mysqli_query($con,$sql);
    if($res){
        header('Location: ../../admin/category/list.php');
    }else{
        header('Location: ../../admin/category/update.php?id='.$category_id);
    }
} 
catch (\Throwable $th) {
    print_r($th);
    exit;
}