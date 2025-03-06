<?php

include 'Vehicle.php';

class Bike extends Vehicle {
    public function startEngine() {
        return "Bike engine started";
    }
}

$bike = new Bike();
echo $bike->startEngine(); // Output: Bike engine started