<?php
//Arithmetic operations (+ - * / % **)
$x = 10;
$y = 20;
$a = "10";
echo $x+$y+$a;//40($a typecasted implicitly)
echo $x**2; //100(exponentials);

//Type casted.
var_dump($a);//string(2) "10" 
var_dump(+$a);//int(10) 
var_dump(-$a);//int(-10)

//Note: integer value +float value = float value
 echo 1+2.02;//3.02

 //fmod():
// The fmod() function returns the remainder (modulo) of x/y.
echo(fmod(20, 4) . "<br>");//0
echo(fmod(20, 3) . "<br>");//2
echo(fmod(15, 6) . "<br>");//-3
echo(fmod(-10, 3) . "<br>");//-1
echo(fmod(0, 0));//NAN

?>