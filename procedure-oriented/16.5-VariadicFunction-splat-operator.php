<?php
//The splat operator is used as three dots before 
//variable (...) . It was introduced in PHP 5.6 but 
//used rarely. In a simple definition, splat operator 
//is used to unpack parameters to functions or to combine
//variables into an array.


//A variadic function accepts a variable number of parameters.
//When you place the ... operator in front of a function parameter,
// the function will accept a variable number of arguments, 
//and the parameter will become an array inside the function. 

function sum(...$arguments): int
{

    return array_sum($arguments);
    // $sum = 0;
    // foreach ($arguments as $numbers) {
    //     $sum = $sum + $numbers;
    // }
    // return $sum;
}
echo sum(10, 20); //30
echo sum(10, 20, 30); //60

//NOTE: SPLAT OPERATOR PARAMETERS SHOULD BE THE LAST PARAMETER.
function sum1(int $x, ...$arguments): int
{
    return array_sum($arguments) + $x;
}
echo sum1(10, 30, 20); //60


//SPLAT OPERATOR CAN ALSO BE USED TO UNPACK ELEMENTS:
$numbers = [30, 10, 20, 100, 200];
echo  sum1(20, ...$numbers);//380
