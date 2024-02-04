<?php
interface Engine {
    public function start();
}

interface Wheels {
    public function rotate();
}

class Car implements Engine, Wheels {
    public function start() {
        echo "Car engine started.<br>";
    }

    public function rotate() {
        echo "Wheels rotating.<br>";
    }

    public function drive() {
        echo "Car is moving.<br>";
    }
}

$myCar = new Car();
$myCar->start();  // Output: Car engine started.
$myCar->rotate(); // Output: Wheels rotating.
$myCar->drive();  // Output: Car is moving.
?>
