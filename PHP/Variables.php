<?php

$string = "Hello World";
$integer = 450;
$float = 45.2;
$boolean = true;
$array1= array("volvo","bmw","audi");
$array2= ["volvo","bmw","audi",1,true];

// this 'var_dump ' function sems to output datatype and data withouth using echo or print
//var_dump($array1);
// this is how you create an object 
 
class Car {
    public $color;
    public $model;

    public function __construct($color,$model)
    {
        $this->color = $color;
        $this->model = $model;
    }
    
    public function message(){
        return "My car is a " .$this->color . " " .$this->model ."!";
    }
}


$myCar = new Car("black","Volvo");
 
// echo $myCar -> message(); // My car is a black Volvo!


// Creating a Constant

/*

Constants are automatically global and can be used across the entire script.


Syntax

define(name, value, case-insensitive)


*/
// string constant
define('Consta','This is a constant value',false);
// echo Consta;

// array constant 


define('Cars',["Alfa Romeo",
"BMW",
"Toyota"],false);
echo Cars[2];