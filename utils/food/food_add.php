<?php 
 try {
   include('../connection.php');

   if (session_status() === PHP_SESSION_NONE) {
      session_start();
   }

   if(!$_POST['food_name']){
      echo 'Invalid Request';
      exit;
   }

   $errors= array();
   $file_name = $_FILES['food_img']['name'];
   $file_size =$_FILES['food_img']['size'];
   $file_tmp =$_FILES['food_img']['tmp_name'];
   $file_type=$_FILES['food_img']['type'];
   $file_ext=strtolower(end(explode('.',$_FILES['food_img']['name'])));
   
   if(empty($errors)==true){
      move_uploaded_file($file_tmp,"../../uploads/".$file_name);
      echo "Success";
   }else{
      print_r($errors);
   }

   $food_category = mysqli_real_escape_string($con,$_POST['food_category']);
   $food_name = mysqli_real_escape_string($con,$_POST['food_name']);
   $food_desc = mysqli_real_escape_string($con,$_POST['food_desc']);
   $food_price = mysqli_real_escape_string($con,$_POST['food_price']);
   $food_img = mysqli_real_escape_string($con,$file_name);

   $sql = "INSERT INTO food (category_id,name,description,price,image) VALUES ('$food_category','$food_name', '$food_desc','$food_price','$food_img')";
   $res = mysqli_query($con,$sql);
   if($res){
      $_SESSION['success'] = ["Food Added Successfully !"];
      header('Location: ../../admin/food/add.php');
   }
  
 } catch (\Throwable $th) {
    print_r($th);
    exit;
 }