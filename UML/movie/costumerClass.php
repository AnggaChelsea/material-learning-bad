<?php 

class customerClass{
    public $name = ' Saltacademy  ';
    public $age = 'age 21,  ' ;
    public function getCostumerName(){
        $namecos = $this->name. $this->age;
        return $namecos;
    }
}

$showcustomer = new customerClass();
echo ' data of customer ';
echo $showcustomer->getCostumerName();

?>

