<?php 
 try {
  
  include('connection.php');
  
  $email = mysqli_real_escape_string($con,$_POST['email']);
  $password = mysqli_real_escape_string($con,$_POST['password']);

  $salt = "f!oo$";
  $new_pass = $password.$salt;
  $hash = password_hash($new_pass,PASSWORD_DEFAULT);

  $sql = "SELECT * FROM admins WHERE email = '$email'";
  $res = mysqli_query($con,$sql);
  $arr = mysqli_fetch_assoc($res);
  $pass = $arr['password'];
  $row = password_verify($new_pass,$pass);
  if($row){
    $_SESSION['session_state'] = 'active';
    $_SESSION['fullname']= $arr['fullname'];
    header('Location: ../admin/dashboard.php');
  }
  else{
    $error="incorrect password or username.";
    header('Location: ../admin/index.php?error='.$error.'');
  }
 
 } catch (\Throwable $th) {
    print_r($th);
 }