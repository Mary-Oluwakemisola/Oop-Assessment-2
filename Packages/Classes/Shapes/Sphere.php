<?php
require_once "./Packages/Classes/Shapes/Circle.php";

class Sphere extends Circle
{


    public function calculateArea()
    {
        $area = 4 * pi() * pow($this->radius, 2);
        return intval($area);
    }

    public function calculateVolume()
    {
        $volume = (4 / 3) * pi() * pow($this->radius, 3);
        return intval($volume);
    }


    public function checkResult()
    {
        echo "The area of a sphere with radius $this->radius is " . $this->calculateArea() . " and the volume is " . $this->calculateVolume();
    }
}