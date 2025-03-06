<?php

class Car {

    private $speed;

    public function setSpeed($s)
    {
        if($s > 0)
        {
            $this->speed = $s;
        }
    }

    public function getSpeed()
    {
        return $this->speed;
    }

}