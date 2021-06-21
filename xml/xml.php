<?php 

$xml = simplexml_load_file('data.xml');
$data = $xml -> topic;
foreach($data as $key){
    foreach($key->name as $names){
        echo "$names";
    }
}


?>