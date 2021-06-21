
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        error {
            color: red;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="name">name</label>
        <input type="text" name="name" id="name" placeholder="name">
        <button type="submit" name="submit">save</button>
    </form>
    <?php
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            if(empty($name)){
                echo "<small style='color:red'>please enter your name</small>";
            }
        }
    ?>
</body>
</html>