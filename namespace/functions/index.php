<?php
require 'Ford.php';
/* namespace function */
use ford\buycarfilter;
$result = ford\buyCarFilter($budget, $car1->models);
echo "<br>*** namespace function ***<br>";
echo "You are able to buy models of<br>";
foreach($result as $value) echo "$value<br>";