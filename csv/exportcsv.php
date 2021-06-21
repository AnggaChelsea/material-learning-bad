<?php 

//set the header
$header = array('name', 'website');
//array of data
$data = [
    [
        "name" => "Saltacademy",
        "website" => "http://salt.id"
    ],
    [
        "name" => "Backend dev",
        "website" => "http://salt.id"
    ]
];
//open create a file
$fh = fopen("salt.csv", "w");
//create the header
fputcsv($fh, $header);
//populate data
foreach ($data as $field){
    fputcsv($fh, $field);
}
//close file
fclose($fh);

?>