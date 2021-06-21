<?php

$conn = mysqli_connect('localhost','root','sayangmamah','saltacademy');
if($conn){
    echo 'success connect';
}
else{
    echo 'error there something wrong';
}


?>