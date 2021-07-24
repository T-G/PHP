<?php

class Vehicle
{
    public $make;
    public $model;
    public $color;

    public function __construct($make, $model, $color)
    {
        $this->make = $make;
        $this->model = strtolower($model);
        $this->color= $color;
    }

    public function intro()
    {
        echo "The car is a {$this->color} {$this->model} and the make is {$this->make}";
    }
}

class Car extends Vehicle {
    public $ignition;
    
    // constructor 
    public function __construct($make, $model, $color, $ignition)
    {
        parent::__construct($make, $model, $color);
        $this->ignition = strtolower($ignition);
    }

    // method overriding
    public function intro()
    {
        echo "The car is a {$this->color} {$this->model} and the make is {$this->make}, {$this->ignition} ignition";

    }
}

$toyota = new Car("Toyota", "Mustang", "red", "Automatic");
$toyota->intro();

?>