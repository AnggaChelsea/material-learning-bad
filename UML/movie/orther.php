<?php
session_start();
$movie = $_SESSION['horror'];
$priceMovie = $_SESSION['price'];
include_once 'costumerClass.php';

$date = date("Y-m-d");

$status = $nameCustumer . ' success buy ticket movie ' .$movie;
echo 'date ticket sale '. $date;
echo ' <br />';
echo $status;
echo ' Rp, ';
echo $priceMovie;


echo ' <br />';
echo ' <br />';
echo ' = ';


//--- for next learning in tutor
// class orther{
//     public $date;
//     public  $status;
//     public function ortherMovies(){
//         $all = $this->date.$this->status;
//         return $all;
//     }
//     public function calculate(){
        
//     }
// }
// $viewOrder = new orther();
// $viewOrder->date = $date = date('Y-m-d');
// $viewOrder->status = $status = ' Success ';  
// echo $viewOrder->ortherMovies();
// echo $viewOrder->calculate();

