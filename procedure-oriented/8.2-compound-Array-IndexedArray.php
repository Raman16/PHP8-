<?php
#Each element in such collection has a unique positional index
#starting from 0. Hence, it is called Indexed array.

//Indexed Array
$programmingLanguage = ['PHP','JAVA','Python'];

//Adding an element to an existing array:

//1.[]
$programmingLanguage[] = 'C++';//Adds to end of an array.

//2.array_push() - Adds to end of an array
array_push($programmingLanguage,'C','GO');

echo '<pre>';
print_r($programmingLanguage);
echo '</pre>';
// Array
// (
//     [0] => PHP
//     [1] => JAVA
//     [2] => Python
//     [3] => C++
//     [4] => C
//     [5] => GO
// )

?>

