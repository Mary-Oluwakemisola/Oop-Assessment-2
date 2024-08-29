<?php
require_once './Packages/Interfaces/Shape.php';

class Cylinder implements Shapes
{
    public int $radius;
    public int $height;


    public function accepts($radius, $height)
    {
        $this->radius = $radius;
        $this->height = $height;
        return $this;
    }
    public function calculateArea()
    {
        $area =2 * pi() * $this->radius * ($this->radius + $this->height);
        return intval($area);
    }
    public function calculateVolume()
    {
        $volume =  pi() * pow($this->radius, 2) * $this->height;
        return intval($volume);
    }


    public function checkResult()
    {
        echo "The area of a cylinder with radius $this->radius is " . $this->calculateArea(). " and the volume is " . $this->calculateVolume();
    }
}