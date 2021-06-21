<?php

include './phpmysql.php';
$create= 'CREATE DATABASE tutorialsdev';
if($con->query($create) === TRUE){
    echo 'succes creating database';
}else{
    echo 'err creating database';
}

?>