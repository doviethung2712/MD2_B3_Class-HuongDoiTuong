<?php

class QuadraticEquation
{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getA()
    {
        return $this->a;
    }

    public function setA($a): void
    {
        $this->a = $a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function setB($b): void
    {
        $this->b = $b;
    }

    public function getC()
    {
        return $this->c;
    }

    public function setC($c): void
    {
        $this->c = $c;
    }

    public function getDiscriminant()
    {
        return   pow($this->b, 2) - 4 * $this->a * $this->c;
    }

    public function getRoot1(){
        $delta = $this->getDiscriminant();
        return number_format((-$this->b+sqrt($delta))/2*$this->a,2);
    }
    public function getRoot2(){
        $delta = $this->getDiscriminant();
        return number_format((-$this->b-sqrt($delta))/2*$this->a,2);
    }

}