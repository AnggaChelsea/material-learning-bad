<?php 
$text = $_POST['name'];
$file = './log.txt';
$write = "this is line one";

file_put_contents($file, $text);

?>

<form action="" method="post">
<input type="text" name="name">
<input type="submit" value="submit">
</form>