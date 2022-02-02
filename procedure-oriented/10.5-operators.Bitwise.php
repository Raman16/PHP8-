<?php

//BITWISE OPERATOR(& | ^ ~ << >>)
//1.& Binary AND 
$x = 6;
$y = 3;
echo $x & $y; //2
//Explantion:
//6 - 110
//3 - 011 (& performing)
//2 - 010

//2.| Binary OR Operator
echo $x | $y;//7
//6 - 110
//3 - 011 (| performing)
//7 - 111

//3.^ (zor)
echo $x ^ $y;//5
//6 - 110
//3 - 011 (^ performing)
//5 - 101

//4 ~ (indication operator)
//NOT operator
//Flip the bits
echo ~$x;//001 -> -7
echo ~$y;//100 -> -4


//5 Binary Left Shift Operator. 
//(each step means "multiply by two")
$x = 6 ;
$y = 3 ;
echo $x << $y;//48
//6 - 110 
//Left Shift - 110000  ->16+32 = 48

//6 Binary Right  Shift Operator. 
//(each step means "divide  by two")

$val = 4;
$places = 1;
$res = $val >> $places;
echo $res;//2
?>
