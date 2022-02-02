<?php


$even = [2, 4, 6, 8, 10];
$odd  = [1, 3, 5, 7, 9];

$newnumbers = array_map(fn ($num1) => $num1 * 2, $even);
echo '<pre>';
print_r($newnumbers);
// Array
// (
//     [0] => 4
//     [1] => 8
//     [2] => 12
//     [3] => 16
//     [4] => 20
// )



//Iterate over multiple arrays:
$newnumbers = array_map(fn ($num1, $num2) => $num1 + $num2, $even, $odd);
echo '<pre>';
print_r($newnumbers);
// Array
// (
//     [0] => 3
//     [1] => 7
//     [2] => 11
//     [3] => 15
//     [4] => 19
// )
