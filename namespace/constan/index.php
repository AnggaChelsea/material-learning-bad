<?php
require 'Ford.php';
use ford\budget; // case-insensitive
echo "<br>*** namespace constant ***<br>";
$budget = ford\BUDGET;
echo "Buyer's budget $budget<br>";