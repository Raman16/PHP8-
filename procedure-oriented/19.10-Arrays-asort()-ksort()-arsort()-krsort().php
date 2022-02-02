<?php

//The asort() function sorts an associative array in ascending order,
// according to the value.
$array = ['d' => 3, 'b' => 1, 'c' => 4, 'a' => 2];
echo '<pre>';
asort($array);
print_r($array);
// Array
// (
//     [b] => 1
//     [a] => 2
//     [d] => 3
//     [c] => 4
// )



//the ksort() function to sort an associative array in ascending order,
// according to the key.
$array = ['d' => 3, 'b' => 1, 'c' => 4, 'a' => 2];
ksort($array);
echo '<pre>';
print_r($array);
// Array
// (
//     [a] => 2
//     [b] => 1
//     [c] => 4
//     [d] => 3
// )



//The arsort() function sorts an associative array in descending order,
// according to the value.
$array = ['d' => 3, 'b' => 1, 'c' => 4, 'a' => 2];
arsort($array);
echo '<pre>';
print_r($array);
// Array
// (
//     [c] => 4
//     [d] => 3
//     [a] => 2
//     [b] => 1
// )


//The krsort() function sorts an associative array in descending order,
// according to the key.
$array = ['d' => 3, 'b' => 1, 'c' => 4, 'a' => 2];
krsort($array);
echo '<pre>';
print_r($array);
// Array
// (
//     [d] => 3
//     [c] => 4
//     [b] => 1
//     [a] => 2
// )
