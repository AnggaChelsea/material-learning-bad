<?php

abstract class Transactional{
    public $name;
    public $pin;
    public function Describe(){
        return $this->name;
    }
}

class costumers extends Transactional{
   public function Name(){
    return $name = 'angga';
   }
}

class card extends costumers{
    public function Name(){
        return $name = 'BCA ';
    }
    
}
class withdrawMoney extends card{
    public function saldo(){
        return $isiSaldo = 250;
    }
}

$costumer = new costumers();
$costumer->name = 'angga';
echo $costumer->Name();

$atmpin = new card();
$atmpin->name = 'BCA';
echo $atmpin->Name();


