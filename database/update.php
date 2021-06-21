<?php 

include './phpmysql.php';

$sql = 'UPDATE coba
      SET name="Salt backend"
      WHERE id=2';

$update = $con->query($sql);
if($update){
    echo 'update successfully';
}else{
    echo 'update failed';
}

?>