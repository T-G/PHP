<?php
/*
Abstract classes and methods
An abstract class should contain at least one abstract method
An abdtract method is only declared
The child or derived class should implement and fill out the tasks or body of the method
*/ 

// TRAIT
trait HelperFunction {

    public function prefixName($name, $separator = "!", $slogan = "I am a")
    {
        return "{$separator} {$slogan} {$name}";     
    }
}

abstract class Car {
    public $name;
    
    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function intro() : string;

    abstract function prefixName($name);
}


// derived class
class Volvo extends Car {

    use HelperFunction;

    public function intro() : string {
        return "Proud to be Swedish{$this->prefixName($this->name)}";
    }
}

class Audi extends Car {
    
    use HelperFunction;
    
    public function intro() : string {
        return "Choose German quality{$this->prefixName($this->name)}";
    }
}

class Citron extends Car {
// The child class may define optional arguments that are not in the parent's abstract method
    
    use HelperFunction;


    public function intro() : string {
        return "French Extravagance{$this->prefixName($this->name)}";
    }
}

// Create objects from the child/derived classes
$audi = new Audi("Audi");
echo $audi->intro();
echo "<br>";

$citron = new Citron("Citron");
echo $citron->intro();
echo "<br>";

$volvo = new Volvo("Volvo");
echo $volvo->intro();
echo "<br>";

?>