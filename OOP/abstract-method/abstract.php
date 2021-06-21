<?php

// abstract class ParentClass {
//   abstract public function someMethod1();
//   abstract public function someMethod2($name, $color);
//   abstract public function someMethod3() : string;
// };

//full 
// Parent class
// abstract class Car {
//   public $name;
//   public function __construct($name) {
//     $this->name = $name;
//   }
//   abstract public function intro() : string;
// }

// // Child classes
// class Audi extends Car {
//   public function intro() : string {
//     return "Choose German quality! I'm an $this->name!";
//   }
// }

// class Volvo extends Car {
//   public function intro() : string {
//     return "Proud to be Swedish! I'm a $this->name!";
//   }
// }

// class Citroen extends Car {
//   public function intro() : string {
//     return "French extravagance! I'm a $this->name!";
//   }
// }

// // Create objects from the child classes
// $audi = new audi("Audi");
// echo $audi->intro();
// echo "<br>";

// $volvo = new volvo("Volvo");
// echo $volvo->intro();
// echo "<br>";

// $citroen = new citroen("Citroen");
// echo $citroen->intro();



abstract class Fruit {
  private $color;

  abstract public function eat();

  public function setColor($c) {
      $this->color = $c;
  }
}

class Apple extends Fruit {
  public function eat() {
      // chew until core
  }
}

class Orange extends Fruit {
  public function eat() {
      // peeling
      // chew
  }
}

$apple = new Apple();
$apple->eat();

// Now I give you a fruit.
$fruit = new Fruit();
$fruit->eat();

?>