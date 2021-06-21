<?php

if(isset($_POST['btn-signup'])){
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mno = $_POST['mno'];
    if(empty('uname')){
        $error = 'Please enter your name';
    }
   elseif(!ctype_alpha('uname')){
        $error = 'Please latter only';
   }
   elseif(empty('email')){
       $error = 'Please enter your email';
   }
   elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)){
       $error = 'Please enter valid email';
   }
   elseif(empty('password')){
       $error = 'Please enter your password';
   }
   elseif($password <= 7){
    $error = 'Please password must last 7 characters';
   }
   else{
       $success = "success register";
   }
}


?>