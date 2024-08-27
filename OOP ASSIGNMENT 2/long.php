<?php

$arr = [23, 4, 1, 4, 7, 8, 0, 9, 7, 33, 45, 77];
$arr2 = [];

for ($i = 0; $i <= count($arr); $i++) {
    if ($arr[$i] % 2 === 0) {

        continue;
    } else {
        $arr2[] = $arr[$i];
    }
}








echo "<pre>";

var_dump($arr2);

echo "</pre>";
