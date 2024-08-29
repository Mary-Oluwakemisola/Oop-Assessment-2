<?php
require_once "./Packages/Classes/Shapes/Triangle.php";
require_once "./Packages/Classes/Shapes/Rectangle.php";
require_once "./Packages/Classes/Shapes/Circle.php";
require_once "./Packages/Classes/Shapes/Square.php";
require_once "./Packages/Classes/Shapes/Sphere.php";
require_once "./Packages/Classes/Shapes/Cylinder.php";
require_once "./Packages/Classes/Shapes/Cube.php";
require_once "./Packages/Classes/Shapes/Cone.php";

class ShapeManager
{
    public function createTriangle()
    {
        return new Triangle();
    }
    public function createRectangle()
    {
        return new Rectangle();
    }
    public function createCircle()
    {
        return new Circle();
    }
    public function createSquare()
    {
        return new Square();
    }
    public function createSphere()
    {
        return new Sphere();
    }
    public function createCylinder()
    {
        return new Cylinder();
    }
    public function createCube()
    {
        return new Cube();
    }
    public function createCone()
    {
        return new Cone();
    }
}