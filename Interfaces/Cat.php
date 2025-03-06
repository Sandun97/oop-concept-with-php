<?php

include 'Animal.php';

class Cat implements Animal {
    public function makeSound() {
        return "Meow";
    }
}

$cat = new Cat();
echo $cat->makeSound(); // Output: Meow