<?php 
 try {
  
  include('connection.php');
  
  $name = mysqli_real_escape_string($con,'User Name');
  $email = mysqli_real_escape_string($con,'user@email.com');
  $password = mysqli_real_escape_string($con,'User@123');

  $salt = "f!oo$";
  $new_pass = $password.$salt;
  $hash = password_hash($new_pass,PASSWORD_DEFAULT);

  $sql = "INSERT INTO user (name,email,password) VALUES ('$name','$email', '$hash')";
  $res = mysqli_query($con,$sql);
  if($res){
    header('Location: ../index.php');
  }
  else{
    $error="incorrect password or username.";
    header('Location: ../index.php?error='.$error.'');
  }
 } catch (\Throwable $th) {
    print_r($th);
 }