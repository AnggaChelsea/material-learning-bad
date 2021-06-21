<?php

include_once 'payment.php';
$idbank = $bankId;
if($idbank == 1234567){
    echo 'oke payment success ';
}else{
    echo ' sorry your payment failed check your account bank ';
}