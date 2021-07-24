<?php
/*
Interfaces are similar to Abstract classes, the differences are:
    1. Interfaces cannot have properties, while abstract classes can.
    2. All interface methods must be public, while abstract method classes can be public and protected.
    3. All methods in an interface are abstract, so they can't be implemented in code and the abstract
        keyword is not necesaary.
    4. Classes can implement an interface while inheriting from another class at the same time.

Interface allows what methods a class should inplement.
It makes easy to use a variety of different classes in the same way. 
When one or more classes use the same interface, it is referred to as "polimorphism".
*/

// Interface Definition
interface Animal {
    public function makeSound();
}

// Class Definition
class Cat implements Animal {
    public function makeSound()
    {
        echo "Meows";
    }
}

class Dog implements Animal {
    public function makeSound()
    {
        echo "Barks";
    }
}

class Mouse implements Animal {
    public function makeSound()
    {
        echo "Squeaks";
    }
}

$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();

$animals = [$cat, $dog, $mouse];

foreach ($animals as $animal) {
    echo get_class($animal) . ": ";
    $animal->makeSound();
    echo "<br>";
}





?>