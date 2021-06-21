<?php 

interface Shape {
    public function calcArea();
  }
//In accordance, the Circle class implements the 
//interface by putting into the calcArea() method the formula that calculates 
//the area of circles.  
class Circle implements Shape {
    private $radius;
    public function __construct($radius)
    {
      $this -> radius = $radius;
    }
    // calcArea calculates the area of circles 
    public function calcArea()
    {
      return $this -> radius * $this -> radius * pi();
    }
  }
  //The rectangle class also implements the 
  //Shape interface but defines the method calcArea() with a calculation formula 
  //that is suitable for rectangles  
  class Rectangle implements Shape {
    private $width;
    private $height;
     
    public function __construct($width, $height)
    {
      $this -> width = $width;
      $this -> height = $height;
      
    }
    
    // calcArea calculates the area of rectangles   
    public function calcArea()
    {
      return $this -> width * $this -> height;
    }
  }
  //Now, we can create objects from the concrete classes:
  $circ = new Circle(3);
  $rect = new Rectangle(3,4);

//We can be sure that all of the objects calculate the area with the method 
//that has the name of calcArea(), whether it is a rectangle object
//or a circle object (or any other shape), as long as they implement the Shape interface.
//Now, we can use the calcArea() methods to calculate the area of the shapes:
echo $circ -> calcArea();
echo $rect -> calcArea();
