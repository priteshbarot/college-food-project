<?php 
 try {
  
  include('connection.php');
  
  $email = mysqli_real_escape_string($con,$_POST['email']);
  $password = mysqli_real_escape_string($con,$_POST['password']);

  $salt = "f!oo$";
  $new_pass = $password.$salt;
  $hash = password_hash($new_pass,PASSWORD_DEFAULT);

  $sql = "SELECT * FROM user WHERE email = '$email'";
  $res = mysqli_query($con,$sql);
  if($res && mysqli_num_rows($res)){
    $arr = mysqli_fetch_assoc($res);
    $pass = $arr['password'];
    $row = password_verify($new_pass,$pass);
    if($row){
      $_SESSION['session_state'] = 'active';
      $_SESSION['user_id'] = $arr['id'];
      $_SESSION['user_name']=$arr['name'];
      $_SESSION['user_email']=$arr['email'];
      header('Location: ../index.php');
    }
    else{
      $error="incorrect password or username.";
      header('Location: ../index.php?error='.$error.'');
    }
  }
  else{
    $error="incorrect password or username.";
    header('Location: ../index.php?error='.$error.'');
  }
  
 
 } catch (\Throwable $th) {
    print_r($th);
 }