<?php
require_once './Packages/Interfaces/Shape.php';

class Triangle implements Shapes
{
    public int $base;
    public int $height;

    public function accepts($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
        return $this;
    }
    public function calculateVolume(){}
    public function calculateArea()
    {
        $area = 0.5 * $this->base * $this->height;
        return intval($area);
    }
    public function checkResult()
    {
        echo "The area of a rectangle with base $this->base and height $this->height is " . $this->calculateArea();
    }
}
// $triangle = new Triangle();
// $triangle->accepts(3, 7)->checkResult();