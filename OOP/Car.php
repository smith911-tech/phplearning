<?php

class Car
{

    // private class means that this variable can only be accessed inside this class
    //protected means it can be accessed by it child class not only this class 
    //public it can be accessed everywhere 


    // properties / fields
    private $brand;
    private $color;
    public $vehicleType = "car";


    //constructor 
    public function __construct($brand, $color)
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    //getter method or setter method
    public function getBrand()
    {
        return $this->brand;
    }
    public function setBrand($brand)
    {
        return $this->brand = $brand;
    }
    
    //method 
    public function getCarInfo(){
        return "Brand: $this->brand and the color is $this->color";
    }
}

//they don't write under the class in real life i import the car class to echocar file