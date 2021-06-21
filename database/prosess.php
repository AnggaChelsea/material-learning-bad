<?php
include './phpmysql.php';
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $email = $_POST['impian'];
     $sql = "INSERT INTO coba (name,impian)
     VALUES ('$name','$email')";
     if (mysqli_query($con, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
     }
     mysqli_close($con);
}
?>