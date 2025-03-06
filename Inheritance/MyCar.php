<?php
include 'Car.php';

class MyCar extends Car
{
    public function displaySpeed()
    {
        return "Speed: " . $this->getSpeed() . " km/h";
    }
}

$myCar = new MyCar();
$myCar->setSpeed(100);
echo $myCar->displaySpeed();



