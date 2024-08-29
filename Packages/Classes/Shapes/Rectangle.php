<?php
require_once './Packages/Interfaces/Shape.php';

class Rectangle implements Shapes
{
    public int $length;
    public int $width;


    public function accepts($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
        return $this;
    }
    public function calculateArea()
    {
        $area = $this->length * $this->width;
        return intval($area);
    }
    public function checkResult()
    {
        echo "The area of a triangle with length $this->length and width $this->width is " . $this->calculateArea();
    }

    public function calculateVolume() {}
}