<?php


//callbacks:

//1.USING CALLABLE:
function dNumbers($elements): int
{
    return $elements * 2;
}

$sum = function (callable $callback, int ...$nums): int {
    return $callback(array_sum($nums));
};
echo $sum('dNumbers', ...$numbers); //30



echo '<br>';
//Note: PHP Anonymous functions are instances of 'closures';
//Hence we can also write code as below

//2.USING CLOSURE:
$sum2 = function (closure $callback, int ...$nums): int {
    return $callback(array_sum($nums));
};
echo $sum2(function
 ($elements) {
    return $elements * 2;
}, ...$numbers);//30

//echo $sum('dNumbers', ...$numbers); //Error:
///Uncaught TypeError: {closure}(): Argument #1 ($callback) must be of type closure.
//(Here 'TypeError' since we are sending 'variable expression' for 'closure' type)

//Difference between 'closure' and 'callable' is that
//'closure' must be an anonymous function.
//'callable' must  be a regular function.
