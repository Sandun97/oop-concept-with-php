<?php
include 'Shape.php';

class Square extends Shape {

    public function draw() {
        return "Drawing square";
    }

}

$obj = new Square();
echo $obj->draw();