<?php
$alphnum = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];


//array_values():The array_values() function returns an array containing 
//all the values of an array.
echo '<pre>';
print_r(array_values($alphnum));
// Array
// (
//     [0] => 1
//     [1] => 2
//     [2] => 3
//     [3] => 4
//     [4] => 5
// )


//array_keys():The array_keys() function returns an array containing the keys.
echo '<pre>';
print_r(array_keys($alphnum));
// Array
// (
//     [0] => a
//     [1] => b
//     [2] => c
//     [3] => d
//     [4] => e
// )
