<?php
include_once 'connect.php';

$insert = mysqli_query($conn, "INSERT INTO students (name, hoby) VALUES('abdulah','shalawat')");
if($insert){
    echo 'insert successfully';
}else{
    echo 'insert failed'; //belajar lagi
}