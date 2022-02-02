<?php


//array_search():The array_search() function search an array 
//for a 'value' and returns the 'key'.

//1.Indexed Array:
$array = ['a', 'b', 'c', 'd', 'e', 'f', 'g'];
$key = array_search('e', $array);
echo $key; //4
// if ($key == false) {
//     echo "Key Not Found!";
// }

// if ($key === false) {
//     echo "Key Not Found!";
// }

//2.Associate Array:
$a = array("a" => "red", "b" => "green", "c" => "blue");
echo array_search("red", $a); //a




//in_array():The in_array() function searches an array for a specific value.
//in_array() returns the boolean value "true" or "false"

if (in_array('e', $array)) {
    echo "Letter Found!";
}
//Letter Found!

echo in_array('c', $array); //1
echo in_array('z', $array); //''
echo json_encode(in_array('z', $array));//false

//json_encode():This will print out boolean value as it is, instead of 1/0.
