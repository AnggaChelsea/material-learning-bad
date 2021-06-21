<?php
include_once('./model/Model.php');
include_once('./controllers/Controller.php');
include_once('./view/viewbook.php');

$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);
echo $view->output();

?>