<?php
require "ford.php";
/* namespace class */
// use ford\car;
$car1 = new ford\car();
echo "<br>*** namespace class ***<br>";
$model = "model-2";
$price = $car1->getPrice($model);
echo "Price of $model is $price<br>";
echo "Made in $car1->country<br>";