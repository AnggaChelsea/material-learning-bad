<?php 
//jikalau mau tau cara panggil array coba pake vardump dan check array
// $arr = ['1','2','3', 4, 'dadang'];
// //function to print arr
// var_dump($arr);
// //human readable
// print_r($arr);
// //dont use echo to print array
// echo $arr;

// //$arr is variable array
// //$arr[0] us a array element
// //0 is a index of array
// //array index start with 0 not 1
// //array can store any type of value - string , integer, double or boolean
// //array has a length based on the number of elements it has
// //you can have array inside array - more about it in the next section
// //Usecase: collection of variable together

// //array count number
// echo count($arr);

//array loops
// $arr = ['1','2','3', 4, 'dadang'];
// for($count = 0; $count < count($arr); $count++){
//     print_r($arr[$count]);   
// }
$arr = ["monday", "tuesday", "wednesday", "thursday"];
foreach($arr as $key){
    echo $key;
}

// Elements of arrays are equal for the comparison if they have the same key and value
// $a = array("apple", "banana");
// $b = array(1 => "banana", "0" => "apple");
// var_dump($a == $b); //this will return true
// var_dump($a === $b); //this will return false


?>