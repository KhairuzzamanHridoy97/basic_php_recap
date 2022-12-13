<?php 
/*
Static methods can be called directly - without creating an instance of the class first.

Static methods are declared with the static keyword: 

*/

// static methods
class vehic{
    protected static function getvehicType(){
        return "Car";
    }
}


class Cars extends vehic{
    public $vehic_type;

    public function __construct()
    {
        $this->vehic_type = parent::getvehicType();
    }
}

$myCar = new Cars;
print_r($myCar);

echo "<br>";

echo $myCar->vehic_type;



// static properties
class pi {
    public static $value=3.14159;
    public function staticValue() {
      return self::$value;
    }
  }
  
  $pi = new pi();
  echo $pi->staticValue();

?>