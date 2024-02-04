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
$myCar = new Car("Toyota", "2xcc ", "Blue");
echo "Car Information: " . $myCar->getThings();
