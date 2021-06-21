<?php
include 'logger.php';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $number = $_POST['number'];
    if($number !=5 ){
        $log = "user input inccorect($number)";
        $logger($log);
        echo "$number is incorrect";
    }else{
        echo "$number is correct";
    }
}

?>

<form action="" method="POST">
<input type="number" name="number" name="number" id="">
<input type="submit" value="submit">
</form>