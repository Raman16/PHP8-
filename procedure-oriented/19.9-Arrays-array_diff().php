<?php


//The array_diff() function compares the values of two (or more) 
//arrays, and returns the differences.
//array_diff(array1, array2, array3, ...)
//Returns an array containing the entries from array1 that are not present 
//in any of the other arrays


$array1 = ['x' => 1, 'y' => 2, 'a' => 3, 'k' => 2000];
$array2 = ['d' => 3, 'e' => 4, 'c' => 3];
$array3 = ['a' => 1, 'b' => 100, 'k' => 3];


echo '<pre>';
print_r(array_diff($array1, $array2, $array3));
// Array
// (
//     [y] => 2
//     [k] => 2000
// )


//array_diff_assoc():
//The array_diff_assoc() function compares the keys and values
//of two (or more) arrays, and returns the differences.
echo '<pre>';
print_r(array_diff_assoc($array1, $array2, $array3));
// Array
// (
//     [x] => 1
//     [y] => 2
//     [a] => 3
//     [k] => 2000
// )

//array_diff_key():
//The array_diff_key() function compares the keys of two
//(or more) arrays, and returns the differences.

echo '<pre>';
print_r(array_diff_key($array1, $array2, $array3));
// Array
// (
//     [x] => 1
//     [y] => 2
// )