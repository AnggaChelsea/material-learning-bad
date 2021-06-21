<?php 

include './phpmysql.php';
$sql = 'DELETE FROM coba WHERE id = 1';
// $retval = mysql_query( $sql, $conn );
$del = $con->query($sql);
if($del){
echo "Deleted data successfully\n";
}else{
    echo "Deleted data not found\n";
}

?>