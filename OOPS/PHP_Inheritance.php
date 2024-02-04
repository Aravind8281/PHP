<?php
class Car{
    public $name;
    public $model;
    public $year;
    public function __construct($name,$model,$year){
        $this->name=$name;
        $this->model=$model;
        $this->year=$year;
    }
    public function getThings(){
        return "{$this->name}  {$this->model}  {$this->year}";
    }
}
class Vehicle extends Car{
    public $price;
    public function __construct($name,$model,$year,$price){
        parent::__construct($name,$model,$year);
        $this->price=$price;
    }
    public function getThings(){
        $get=parent::getThings();
        return "{$get} {$this->price}";
    }
}
$myCar = new Vehicle("Toyota", "2xcc ", "Blue","40000");
echo "Car Information: " . $myCar->getThings();
