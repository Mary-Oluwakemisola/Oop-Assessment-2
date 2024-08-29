<?php
require_once "./Packages/Classes/Shapes/Square.php";
class Cube extends Square
{
    public function calculateArea()
    {
        $area = 6 * pow($this->side, 2);
        return intval($area);
    }

    public function calculateVolume()
    {
        $volume = pow($this->side, 3);
        return intval($volume);
    }

    public function checkResult()
    {
        echo "The area of a cube with radius $this->side is " . $this->calculateArea() . " and the volume is " . $this->calculateVolume();
    }
}