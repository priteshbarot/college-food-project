<?php 
 try {
  
  include('connection.php');
  
  $email = mysqli_real_escape_string($con,'admin@email.com');
  $password = mysqli_real_escape_string($con,'Admin@123');

  $salt = "f!oo$";
  $new_pass = $password.$salt;
  $hash = password_hash($new_pass,PASSWORD_DEFAULT);

  $sql = "INSERT INTO admins (email,password) VALUES ('$email', '$hash')";
  $res = mysqli_query($con,$sql);
  if($res){
    header('Location: ../admin/dashboard.php');
  }
  else{
    $error="incorrect password or username.";
    header('Location: ../admin/index.php?error='.$error.'');
  }
 } catch (\Throwable $th) {
    print_r($th);
 }