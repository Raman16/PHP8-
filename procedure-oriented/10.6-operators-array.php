<?php

//ARRAY OPERATORS:
// Example	  Name	       Result
// $a + $b	  Union	       Union of $a and $b.
// $a == $b	  Equality	   true if $a and $b have the same key/value pairs.
// $a === $b  Identity	   true if $a and $b have the same key/value pairs in 
////////////////////////////the same order  and of the same types.
// $a != $b	  Inequality	true if $a is not equal to $b.
// $a <> $b	  Inequality	true if $a is not equal to $b.
// $a !== $b  Non-identity	true if $a is not identical to $b.
$a = [10, 20, 30];
$b = [10, 40, 50, 60];

//Union of $a and $b:
print_r($a + $b);
//Array ( [0] => 10 [1] => 20 [2] => 30 [3] => 60 )
//Union of $b and $a:
print_r($b + $a);
//Array ( [0] => 10 [1] => 40 [2] => 50 [3] => 60 )

$a = ['apple', 'banana'];
$b = [1 => 'banana', 0 => 'apple'];
$c = [0 => 'apple', 1 => 'banana'];

echo $a ==  $b; //1 //SAME KEY-VALUE
echo $a === $b; //'' //NOT IN SAME ORDER
echo $a === $c; //1 //SAME ORDER SAME KEY-VALUE
echo $b === $c; //'' //NOT IN SAME ORDER, BUT SAME KEY-VALUE
echo $b == $c;//1 //SAME KEY-VALUE
