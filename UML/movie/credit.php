<?php

// $nameCredit = 'saltacademy';
// $type = 'Flash Card';
// $exp = '20-02-2021';
include_once 'payment.php';
$creditname = $nameCredit;
$cardType = $type;
echo ' your card name ' . $creditname ;
$expires = $exp;
if($exp == '20-01-2021'){
    echo ' sorry your card expired';
}
else{
    echo ' thank your payment successfully ';
}