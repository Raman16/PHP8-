<?php

//array_combine(): Create an array by using the elements
//from one "keys" array and one "values" array:


$array1 = ['a', 'b', 'c', 'd', 'e'];
$array2 = [1, 2, 3, 4, 5];

print_r(array_combine($array1, $array2));
//Array ( [a] => 1 [b] => 2 [c] => 3 [d] => 4 [e] => 5 )
//Note: Both arrays must have equal number of elements!

