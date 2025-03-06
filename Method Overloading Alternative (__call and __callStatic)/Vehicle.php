<?php

class Vehicle {

    public function __call($name, $arguments) {
        if ($name == 'park') {
            switch (count($arguments)) {
                case 1:
                    return "Stop, " . $arguments[0];
                case 2:
                    return "Stop, " . $arguments[0] . " | " . $arguments[1];
                default:
                    return "Invalid number of arguments";
            }
        }
    }

    public static function __callStatic($name, $arguments) {
        if ($name == 'park') {
            return "Static Stop, " . implode(" ", $arguments);
        }
    }
}

$obj = new Vehicle();
echo $obj->park("Car") . PHP_EOL; // Stop, Car
echo $obj->park("Car", "Van") . PHP_EOL; // Stop, Car Van

echo Vehicle::park("Car", "Van") . PHP_EOL; // Static Stop, Car Van