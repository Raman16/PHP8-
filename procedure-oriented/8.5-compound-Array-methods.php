<?php
$array = ['a', 'b', 50 => 'c'];

//1.Add an element to end of an array
array_push($array, 'D');

//2.Add an element to start of an array
array_unshift($array, 'AA');
echo '<pre>';
print_r($array);
//output:
// Array
// (
//     [0] => AA
//     [1] => a
//     [2] => b
//     [3] => c
//     [4] => D
// )


//3.remove an element at end of an array
array_pop($array);

//4.remove an element at start of an array
array_shift($array);

//5.array count
echo count($array); //3


//6.unset
//unset will not re-arrange the array index
unset($array[0]);
echo '<pre>';
print_r($array);
//output:
// Array
// (
//     [1] => b
//     [2] => c
// )


//7.check if a "key" Exist or NOT
$arr = ['a' => 1, 'b' => null, 'status' => 'completed'];
var_dump(array_key_exists('b', $arr)); //bool(true)
var_dump(isset($arr['b'])); //bool(false)
//Note:isset() checks if a "key" exist.
// Also if the "value" is NULL or NOT.

//8.check if a "value" Exist or NOT
var_dump(in_array('completed', $arr)); //bool(true)

$numbers = [10, 40, 30];//indexed array
var_dump(in_array(40, $numbers)); //bool(true)
var_dump(in_array(50, $numbers));//bool(false)
