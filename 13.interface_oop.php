<?php 

/*
Interfaces allow you to specify what methods a class should implement.
Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".
interface InterfaceName {
  public function someMethod1();
  public function someMethod2($name, $color);
  public function someMethod3() : string;
}
Interface are similar to abstract classes. The difference between interfaces and abstract classes are:
Interfaces cannot have properties, while abstract classes can
All interface methods must be public, while abstract class methods is public or protected
All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
Classes can implement an interface while inheriting from another class at the same time
*/

// Interface defination



interface Cars {
    public function intro();
}


// Class definations
class Marsha implements Cars{
    public $secret_engine;

    public function __construct($engine)
    {
        $this->secret_engine = $engine;
    }

    public function intro()
    {
        echo "This is Marsha car with engine: $this->secret_engine";   
    }
}

class Ena implements Cars{
    public $secret_engine;

    public function __construct($engine)
    {
        $this->secret_engine = $engine;
    }

    public function intro()
    {
        echo "This is Ena car with engine: $this->secret_engine";   
    }
}


//Create Objects
$Marsha = new Marsha("BM7345iu&6");
$Ena = new Ena("TY89345au&6");

print_r($Marsha);
echo "<br>";
print_r($Ena);
echo "<br>";


$Marsha->intro();
echo "<br>";
$Ena->intro();
?>