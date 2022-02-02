<?php
//https://www.php.net/manual/en/language.operators.precedence.php
//PRECEDENCE AND ASSOCIATIVITY
echo $x = 5 + 3 * 5; //20

echo $x = (5 + 3) * 5; //40


//Assignment
//RIGHT(Associativity)	= += -= *= **= /= .= %= &= |= ^= <<= >>= ??=	
$x = $y =  10; //(same precendence)
//Above code runs as $y = 10, $x = $y
echo $x; //10

//Arithmetic
//LEFT(Associativity)	* / %	
$x = 10;
$y = 2;
$z = 10;
$result = $x / $y * $z;
echo $result; //50


//Logical 
//!	logical  
//left	&&	logical
$x = true;
$y = false;
$z = true;
echo ($x && !$y); //1
//NOTE: '!' has higher precendence than && or ||,..

//left	&&	logical
//left	||	logical
echo ($x && $y || $z); //1

echo ($x and $y or $z); //1


//"=" has higher precedence than "and", "xor", "or"
$z = $x and $y;
//Above code $z = true assigned and then "and $y"->discarded.
echo $z; //1
