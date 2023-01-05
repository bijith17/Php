<?php

class Vehicle{

        private $name;
        protected $wheels;
        protected $color;

    function __construct(){

        echo 'initialize Vehicle class';
        
    }
    public function accelerate(){

        echo "Accelerated Vehicle <br>";

    }
    public function apply_break(){

        echo "break!!! <br>";

    }
 
}

class Car extends Vehicle{
    function __construct(){
        parent::__construct();
        echo 'Initialize Car class  <br> ';

    }
    protected $seat_belt;
    protected $window;   
}

class Bike extends Vehicle{
    protected $side_stand;

    function __construct(){
        echo 'Initialize Bike class <br>';

    }
}
$bike_object = new Bike();
echo $bike_object->accelerate();
echo $bike_object->apply_break();


$car_object = new Car();
echo $car_object->accelerate();

?>





