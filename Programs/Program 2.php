<?php
require_once "./Packages/Classes/ShapeManager.php";

$shape = new ShapeManager();
$shape->createSphere()->accepts(5)->checkResult();
$shape->createCube()->accepts(4)->checkResult();