<?php
session_start();
$name = ' SaltMovie ';
$price = 50000;
$categories = [];
$categories[0] = 'horror';
$categories[1] = ' action ';
$categories[2] = ' RPG';
$_SESSION['horror'] = $categories[0];
$_SESSION['price'] = $price;
echo $name;
echo $categories[1]. ','. $categories[0].  ','. $categories[2];
echo "<br />";
echo 'Rp'. $price;


//--- for next learning in tutor
// class MovieList{
//     public $name = ' saltacademy Movie ';
//     public $price = 5000;
//     public $categories = ['horror','action','RPG'];
//     public function allFilm(){
//         $horrors = $this->name. $this->price. $this->categories;
//         return $horrors;
//     }
// }
// $_SESSION['horror'] = $categories[0];
// $_SESSION['price'] = $price;
// $buyHoror = new MovieList();
// echo $buyHoror->allFilm();      

?>
