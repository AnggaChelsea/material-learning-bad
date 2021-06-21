<?php
namespace ford;
echo "<br>### namespace: " . __NAMESPACE__ . " loaded<br>";
class car {
    public $country = 'Indonesia';
    public $models = [ "model-1"=>15000, "model-2"=>25000 ];
    public function getPrice($model_name) {
        return $this->models[$model_name];
    }
}
function buyCarFilter($budget, $models) {
    $result = [];
    foreach($models as $model=>$price) {
        if( $budget >= $models[$model]) $result[] = "$model ==> $price";
    }
    return $result;
}
const BUDGET = 26000;
?>