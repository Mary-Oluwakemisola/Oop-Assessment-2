<?php
require_once './Packages/Classes/Shapes/Cylinder.php';

class Cone extends Cylinder
{

    public function calculateArea()
    {
        $area = pi() * $this->radius * ($this->radius + sqrt(pow($this->radius, 2) + pow($this->height, 2)));
        return intval($area);
    }

    public function calculateVolume()
    {
        $volume = (4 / 3) * pi() * pow($this->radius, 3);
        return intval($volume);
    }


    public function checkResult()
    {
        echo "The area of a cone with radius $this->radius and height $this->height is " . $this->calculateArea() . " and the volume is " . $this->calculateVolume();
    }
}
