<?php
include 'Shape.php';

class Circle extends Shape {

    public function draw() {
        return "Drawing circle";
    }

}

$obj = new Circle();
echo $obj->draw();