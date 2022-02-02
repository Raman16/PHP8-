<?php

echo PHP_INT_MAX;//9223372036854775807 //maximum value
echo PHP_INT_MIN;//-9223372036854775808 //minimum value

echo '<br>';
$x = PHP_INT_MAX ;
echo  getType($x);//integer
$x++;
echo gettype($x);//double
//Note:Above code "double",since the value is exceeded 
//the maximum value, it got type conversion.

$x = (int)2.4;
echo $x;//2 (removed floating point)

$x = (int)null;
echo $x;//0 

$x = (int)'86TESTINFO';//number+string
echo $x; //86

$x = (int) 'TESTINFO';//string
echo $x; //0

//To check if value is integer or not:
echo is_int($x);//1
echo is_integer($x);//1


//Numeric Separator (SUPPORTED in 7.4 and LATER VERSION)
// $number = 5_000_000_000; // 5 billion
// var_dump($number); // int(5000000000)

?>