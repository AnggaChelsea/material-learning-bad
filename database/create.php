<?php

include_once 'connect.php';

//Tentukan variabel dan inisialisasi dengan nilai kosong
$name = $hoby = '';
$name_err = $hoby_err = '';

//Memproses data formulir saat formulir dikirimkan
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //validate name form
    $input_name = trim($_POST['name']);
    if(empty($input_name)){
        $name_err = 'please input name';
    }
    //jikalau mau pake regex
    elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = 'please input valid name';
    }else{
        $name = $input_name;
    }
    //validate hoby text must more than 10 carachter
    $input_hoby = trim($_POST['hoby']);
    if(empty($input_hoby)){
        echo 'Please input hoby text';
    }elseif($input_hoby < 10){
        echo ' Please input carachter more then 10 ';
    }else{
        $hoby = $input_hoby;
    }

    //check input data before insert into databases
    if(empty($name_err) && empty($hoby)){
        //Siapkan pernyataan sisipan
        $sql = "INSERT INTO students(name,hoby) VALUES(?,?)";
        if($stmt = mysqli_prepare($conn, $sql)){
            //Ikat variabel ke pernyataan yang disiapkan sebagai parameter
         mysqli_stmt_bind_param($stmt,"sss",$param_name,$param_hoby);
         //set parameter
         $param_name = $name;
         $param_hoby = $hoby;
         //Cobalah untuk mengeksekusi pernyataan yang disiapkan
         if(mysqli_stmt_execute($stmt)){
             //Catatan berhasil dibuat. Redirect ke halaman arahan
             header('location:input.php');
             exit();
         }else{
             echo 'ups there something wrong';
         }
        }
        
    }
}
?>