<?php
session_start();
$payment = $_SESSION['cash'];
$subTotal = $_SESSION['count'];
include_once 'orther.php';

$quantity = 1;
$taxStatus = ' successfully payemnt Via' .$payment . ' SubTotal ' . $subTotal;
// $count = $quantity * $price;

echo ' <br />';
echo '<h4>order detail</h4>';
echo ' <br />';
echo 'quantiyy ' .$quantity;
echo ' <br />';
echo 'taxStatus '.$taxStatus;
echo ' <br />';
echo ' product details';
echo ' <br />';
echo $count;

// class OrherDetail{
//     public $quantity;
// }