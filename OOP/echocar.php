<?php
require 'Car.php';

$car01 = new Car("bmw", "blue");
echo $car01->getBrand(). "<br>";
echo $car01->setBrand("Volvo") . "<br>"; 
echo $car01->getCarInfo();



