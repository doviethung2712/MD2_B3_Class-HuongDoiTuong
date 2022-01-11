<?php

class Pan
{

    private $speed;
    private $on;
    private $radius;
    private $color;

    public function __construct()
    {
        $this->on = false;
        $this->radius = 5;
        $this->color = "Blue";

    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function setSpeed($speed): void
    {
        $this->speed = $speed;
    }

    public function getOn()
    {
        return $this->on;
    }

    public function setOn($on): void
    {
        $this->on = $on;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius): void
    {
        $this->radius = $radius;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }

    public function toString(){
        if ($this->on == true){
            return "Speed là: ". $this->speed .", Color là: " . $this->color .", Radius là: ". $this->radius ." fan is on" ;
        }
        return "Color là: " . $this->color .", Radius là: ". $this->radius ." fan is off";
    }

}