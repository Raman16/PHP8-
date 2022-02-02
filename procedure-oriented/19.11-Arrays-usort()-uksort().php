<?php

//The usort() function sorts an array using 
//a user-defined comparison function.
$array = ['d' => 3, 'b' => 1, 'c' => 4, 'd' => 2];
function sortArray($a, $b)
{
  if ($a == $b) return 0;
  return $a < $b ? 1 : -1;
}
usort($array, 'sortArray');
echo '<pre>';
print_r($array);
// Array
// (
//     [0] => 4
//     [1] => 2
//     [2] => 1
// )

//Note: Duplicate values are removed in above user
//defined function   if ($a == $b) return 0;

//The uksort() function sorts an array by keys using 
//a user-defined comparison function.
$array = ['d' => 3, 'b' => 1, 'c' => 4, 'd' => 2];
uksort($array, 'sortArray');
echo '<pre>';
print_r($array);

// Array
// (
//     [d] => 2
//     [c] => 4
//     [b] => 1
//)
