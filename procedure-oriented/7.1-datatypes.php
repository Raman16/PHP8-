<?php

//Data Types:

//Scalar Types:
#bool - true/false
$completed = true;
#int - 1, 2, -5 (no decimal)
$score = 98;
#float - 1.5, 0.5, -15.88
$price = 0.98;
#string -"Greeting"
$greeting ="Hello World!";

//Get the type of the value:
echo  gettype($completed);//boolean
var_dump($completed);//bool(true)

//Compound Types:
#Arrays:
$companies = [1,2,3,0.5,'A',true];
print_r($companies);
//Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 0.5 [4] => A [5] => 1 )
#objects
#Callable
#Iterable

#Special Types:
#resource
#null

?>