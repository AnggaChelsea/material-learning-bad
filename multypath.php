<?php 

if(isset($_POST['submit'])){
    print_r($_FILES);
}

?>

<form action="" method="POST" enctype="multipart/form-data">
<input type="file" name="doc[]" multiple >
<input type="submit" value="submit" name="submit">
</form>