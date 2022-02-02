<?php

//https://www.php.net/manual/en/types.comparisons.php
//comparison operators:
//(== <> < > </ >/ ?? ?:)//compares values(loose comparison)
//Loose comparison does type conversions for us.

//(=== !==)//compares datatypes and values(strict comparison)

$x = 5;
$y = '5';
echo $x !== $y; //1
echo $x == $y; //1

$x  = "Hello World";
$y  = strpos($x, 'H');

if ($y == false) {  //Loose comparison does type conversion
    echo "Not found";
    //$y = 0, after type conversion it becomes bool(false)
} else {
    echo "Found";
}
//Output: Not Found

if ($y === false) { //strict comparison
    echo "Not found";
} else {
    echo "Found";
}
//Output: Found.


//Terninary operator (?:)
//$y = 0 ;
echo ($y + 3 > 2 ? 'YES' : 'NO'); //YES

$x = null;
$y = $x ?? 'hello';//if $x is not null
var_dump($y);//string(5) "hello"