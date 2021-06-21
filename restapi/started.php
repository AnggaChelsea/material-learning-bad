<?php 
$myobj;
$myobj->name = 'angga';
$myobj->type = 'backend';
$myobj->address = 'Sukabumi';

$myJson = json_encode($myobj);
echo $myJson;

?>