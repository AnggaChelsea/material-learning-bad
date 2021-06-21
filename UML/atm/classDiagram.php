<?php
//class diagram example animals
//inheritance
abstract class Animal
{
    public $name;
    public $age;
    public function setName()
    {
        return $this->name . " " . $this->age . " years old";
    }
    abstract public function Greet();
}
class cat extends Animal
{
    public function Greet()
    {
        return ' I will eat';
    }
    public function setName()
    {
        return parent::setName() . "I'm a cat!";
    }
    public function eat()
    {
        return 'Wiskes';
    }
}

class elephant extends Animal
{
    public function Greet()
    {
        return $this->name . ", " . $this->age;
    }
    public function setName()
    {
        return parent::setName() . ", and I'm a big elephant'";
    }
    public function eat()
    {
        return ' i am eat human ';
    }
}

$animal = new cat();
$animal->name;
$animal->age = 5;
echo $animal->setName();
echo $animal->Greet();
echo $animal->eat();
echo '<br />';

$animal = new elephant();
$animal->name = "agus";
$animal->age = 28;
echo $animal->setName();
echo $animal->Greet();
echo $animal->eat();
