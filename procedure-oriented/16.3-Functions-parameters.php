<?php

declare(strict_types=1);

function foo(int $x, int $y)
{
    return $x + $y;
}
var_dump(foo(10, 20)); //int(30)

//var_dump(foo(10.5, '20'));
//Above code run into error:
//TypeError: Argument 1 passed to foo() 
//must be of the type int, float given...



//NOTE:PHP8 SUPPORT UNION TYPES:
// function foo2(int|float $x, int|string $y)
// {
//     return $x + $y;
// }
// var_dump(foo2(10.5, '20'));//float(30.5)



function foo2(int $x, int $y, int $z = 10)
{
    echo $x + $y + $z;
}
foo2(10, 20);//40
//Note:optional parameter should be placed after 
//all the required parameters are placed.
//BELOW CODE CAUSE ERROR:
// function foo2(int $x, int $z=10,int $y){
//     echo $x+$y+$z;
// }
//foo2(10,20);
//Uncaught ArgumentCountError: Too few arguments 
//to function foo2(),