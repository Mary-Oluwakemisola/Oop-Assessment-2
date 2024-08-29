<?php
require_once './Packages/Interfaces/Shape.php';

class Square implements Shapes
{
    public int $side;

    public function accepts($side)
    {
        $this->side = $side;

        return $this;
    }
    public function calculateArea()
    {
        $area =  pow($this->side, 2);
        return intval($area);
    }

    public function calculateVolume() {}
    public function checkResult()
    {
        echo "The area of a square with side $this->side is " . $this->calculateArea();
    }
}
