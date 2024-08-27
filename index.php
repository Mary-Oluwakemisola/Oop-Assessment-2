<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    





<?php
                                                         echo "<h1> number 1 </h1>";


$base_triangle = 5;
$height_triangle = 6;


$length_rectangle = 8;
$width_rectangle = 4;


$radius_circle = 4;


$side_square = 5;


$area_triangle = 0.5 * $base_triangle * $height_triangle;
$area_rectangle = $length_rectangle * $width_rectangle;
$area_circle = pi() * pow($radius_circle, 2);
$area_square = pow($side_square, 2);




echo "The area of a triangle with base $base_triangle and height $height_triangle is $area_triangle" . PHP_EOL;

echo "<br>";

echo "The area of a rectangle with length $length_rectangle and width $width_rectangle is $area_rectangle" . PHP_EOL;

echo "<br>";

echo "The area of a circle with radius $radius_circle is " . round($area_circle, 2) . PHP_EOL;
echo "<br>";

echo "The area of a square with side $side_square is $area_square" . PHP_EOL;





                                                         echo "<H1>NUMBER 2</H1>";




// Variables for dimensions
// Sphere
$radius_sphere = 6;

// Cylinder
$radius_cylinder = 3;
$height_cylinder = 7;

// Cube
$side_cube = 4;

// Cone
$radius_cone = 5;
$height_cone = 10;

// Calculating surface areas and volumes
// Sphere: Surface Area = 4 * π * r^2, Volume = (4/3) * π * r^3
$area_sphere = 4 * pi() * pow($radius_sphere, 2);
$volume_sphere = (4 / 3) * pi() * pow($radius_sphere, 3);

// Cylinder: Surface Area = 2 * π * r * (r + h), Volume = π * r^2 * h
$area_cylinder = 2 * pi() * $radius_cylinder * ($radius_cylinder + $height_cylinder);
$volume_cylinder = pi() * pow($radius_cylinder, 2) * $height_cylinder;

// Cube: Surface Area = 6 * side^2, Volume = side^3
$area_cube = 6 * pow($side_cube, 2);
$volume_cube = pow($side_cube, 3);

// Cone: Surface Area = π * r * (r + √(r^2 + h^2)), Volume = (1/3) * π * r^2 * h
$slant_height_cone = sqrt(pow($radius_cone, 2) + pow($height_cone, 2));
$area_cone = pi() * $radius_cone * ($radius_cone + $slant_height_cone);
$volume_cone = (1 / 3) * pi() * pow($radius_cone, 2) * $height_cone;

// Printing results
echo "The surface area of a sphere with radius $radius_sphere is " . round($area_sphere, 2) . " and the volume is " . round($volume_sphere, 2) . ".<br>";
echo "The surface area of a cylinder with radius $radius_cylinder and height $height_cylinder is " . round($area_cylinder, 2) . " and the volume is " . round($volume_cylinder, 2) . ".<br>";
echo "The surface area of a cube with side $side_cube is $area_cube and the volume is $volume_cube.<br>";
echo "The surface area of a cone with radius $radius_cone and height $height_cone is " . round($area_cone, 2) . " and the volume is " . round($volume_cone, 2) . ".<br>";

 



?>
<br><br>
<form action="3-palindrome.php" method="get">
        <button type="submit">Go to Next Page</button>
    </form>

</body>
</html>

