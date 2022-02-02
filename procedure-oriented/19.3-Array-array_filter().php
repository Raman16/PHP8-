<?php
//array_filter():
//The array_filter() function filters the values of an array 
//using a callback function.
//array_filter(array, callbackfunction, flag)
// ARRAY_FILTER_USE_KEY - pass key as the only argument to callback (instead of the value)
// ARRAY_FILTER_USE_BOTH - pass both value and key as arguments to callback (instead of the value)


$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$even = array_filter($array, fn ($value) => $value % 2 == 0);
echo '<pre>';
print_r($even);
// Array
// (
//     [1] => 2
//     [3] => 4
//     [5] => 6
//     [7] => 8
//     [9] => 10
// )


$even = array_filter($array, fn ($key) => $key % 2 == 0, ARRAY_FILTER_USE_KEY);
echo '<pre>';
print_r($even);
// Array
// (
//     [0] => 1
//     [2] => 3
//     [4] => 5
//     [6] => 7
//     [8] => 9
// )



$even = array_filter($array, fn ($value, $key) =>  $key . '' . $value, ARRAY_FILTER_USE_BOTH);
echo '<pre>';
print_r($even);
// Array
// (
//     [0] => 1
//     [1] => 2
//     [2] => 3
//     [3] => 4
//     [4] => 5
//     [5] => 6
//     [6] => 7
//     [7] => 8
//     [8] => 9
//     [9] => 10
// )
