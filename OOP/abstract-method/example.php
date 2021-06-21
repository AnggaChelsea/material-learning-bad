<?php 

abstract class Animals {
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    abstract public function intro() : string;
}
//children classes
class Kucing extends Animals {
   public function intro() : string{
   return "choose what you want to take a pet $this->name";
}
}
class Kelinci extends animals {
    public function intro() : string{
        return "greate being a animals cats I am take $this->name";
    }
}
//create objects from the children classes
$kucing = new kucing("kucing");
echo $kucing->intro();

$kelinci = new kelinci("kelinci");
echo $kelinci->intro();

?>