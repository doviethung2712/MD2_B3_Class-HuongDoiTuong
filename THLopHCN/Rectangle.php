<?php

class Rectangle
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width): void
    {
        $this->width = $width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height): void
    {
        $this->height = $height;
    }

    public function tinhDientich(){
        return $this->getHeight()*$this->getWidth();
    }

    public function tinhChuVi(){
        return (($this->width + $this->height) * 2);
    }

    public function display(){
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }

}