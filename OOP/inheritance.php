<?php 

class Stack {
    public $name;
    public $stack;
    public function __construct($name, $stack) {
      $this->name = $name;
      $this->stack = $stack;
    }
    public function intro() {
      echo "I am {$this->name} and My stack is {$this->stack}.";
    }
  }
  
  // Strawberry is inherited from Stack
  class Bootcamp extends Stack {
    public function message() {
      echo "Who am I and what is my stack programming ? ";
    }
  }
  $saltacademy = new Bootcamp("Salt academy", "Backend dev");
  $saltacademy->message();
  $saltacademy->intro();

?>