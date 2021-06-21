<?php 
session_start();
$ticket = $_SESSION['horror'];
$description = '   already buy ticket ' . $ticket ;
$shippingCount = 1;
$inStock = 1;
echo 'your description that you '. $description;
echo ' <br />';
echo ' shippingCount ' . $shippingCount;

?>