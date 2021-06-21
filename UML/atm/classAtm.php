<?php

session_start();

$nopin = $_SESSION['nopin'];
$angga = 123456;
$noangga = 1234;

if($angga == $nopin){
    //set session
    header('Location:sessionsucces.php');
}else{
    echo ' maaf ATM belum jalan ';
}