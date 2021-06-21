<?php
session_start();
$_SESSION['cash'] = 'Via Cash';
include_once 'payment.php';

$budget = 50000;
$count = $budget - $priceMovie;
$_SESSION['count'] = $count;

echo " calculates payemtn , your budget " . $budget . '- ticket price' . $priceMovie ;
echo "<br />";
echo '=';
echo $count;