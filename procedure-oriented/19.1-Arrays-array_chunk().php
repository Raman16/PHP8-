<?php

//array_chunk():
//The array_chunk() function splits an array into chunks of new arrays.
$scripting = ["PHP", "JAVASCRIPT"];
echo '<pre>';
print_r(array_chunk($scripting, 1));
// Array
// (
//     [0] => Array
//         (
//             [0] => PHP
//         )

//     [1] => Array
//         (
//             [0] => JAVASCRIPT
//         )

// )


$alpheNum = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
echo '<pre>';
print_r(array_chunk($alpheNum, 2));
// Array
// (
//     [0] => Array
//         (
//             [0] => 1
//             [1] => 2
//         )

//     [1] => Array
//         (
//             [0] => 3
//             [1] => 4
//         )

//     [2] => Array
//         (
//             [0] => 5
//         )

// )

//To preserve the keys: we need to set third argument "true":
print_r(array_chunk($alpheNum, 2, true));
// Array
// (
//     [0] => Array
//         (
//             [a] => 1
//             [b] => 2
//         )

//     [1] => Array
//         (
//             [c] => 3
//             [d] => 4
//         )

//     [2] => Array
//         (
//             [e] => 5
//         )

// )