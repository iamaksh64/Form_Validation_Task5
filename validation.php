<?php
  $emailErr = $passwordErr = "";

  if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST['email'])){
      $emailErr = "Email is required.";
    }
    else{
      $email = $_POST['email'];
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailErr = "email is invalid";
      }
    }

    if(empty($_POST['password'])){
      $passwordErr = "Password is required.";
    }
    else{
      $password = $_POST['password'];
      if(strlen($password)<9){
        $passwordErr = "Your password must contain atleast 9 characters!";
      }
      elseif(!preg_match("#[0-9]+#",$password)){
        $passwordErr = "Your password must contain one number!";
      }
      // elseif(!preg_match("#[A-Z]+#",$password)){
      //   $passwordErr = "Your password must contain one uppercase letter!";
      // }
      // elseif(!preg_match("#[a-z]+#",$password)){
      //   $passwordErr = "Your password must contain one lowercase letter!";
      // }
    }
  }
?>