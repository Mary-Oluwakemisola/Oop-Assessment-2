<?php
require_once "./Packages/Classes/ShapeManager.php";

$shape = new ShapeManager();
$shape->createRectangle()->accepts(5, 10)->checkResult();
$shape->createSquare()->accepts(4)->checkResult();