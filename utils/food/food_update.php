<?php 
 try {
    include('../connection.php');

    $food_id = mysqli_real_escape_string($con,$_POST['id']);
    $food_category = mysqli_real_escape_string($con,$_POST['food_category']);
    $food_name = mysqli_real_escape_string($con,$_POST['food_name']);
    $food_desc = mysqli_real_escape_string($con,$_POST['food_desc']);
    $food_price = mysqli_real_escape_string($con,$_POST['food_price']);
    $food_img = mysqli_real_escape_string($con,$_POST['food_img']);

    $sql = "update food set category_id = "."'$food_category'".", name = "."'$food_name'".", description = "."'$food_desc'".", price = "."'$food_price'".", image = "."'$food_img'"." where id = ".$food_id;
    $res = mysqli_query($con,$sql);
    if($res){
        header('Location: ../../admin/food/list.php');
    }else{
        header('Location: ../../admin/food/update.php?id='.$food_id);
    }
} 
catch (\Throwable $th) {
    print_r($th);
    exit;
}