<?php

class Number {
    
    private $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function add(Number $num) {
        return new Number($this->value + $num->value);
    }

    public function subtract(Number $num) {
        return new Number($this->value - $num->value);
    }

    public function multiply(Number $num) {
        return new Number($this->value * $num->value);
    }

    public function divide(Number $num) {
        if ($num->value == 0) {
            throw new Exception("Cannot divide by zero");
        }
        return new Number($this->value / $num->value);
    }

    public function getValue() {
        return $this->value;
    }
}

$num1 = new Number(10);
$num2 = new Number(5);

$result = $num1->add($num2);
echo "Addition: " . $result->getValue() . PHP_EOL; // 15

$result = $num1->subtract($num2);
echo "Subtraction: " . $result->getValue() . PHP_EOL; // 5

$result = $num1->multiply($num2);
echo "Multiplication: " . $result->getValue() . PHP_EOL; // 50

$result = $num1->divide($num2);
echo "Division: " . $result->getValue() . PHP_EOL; // 2
