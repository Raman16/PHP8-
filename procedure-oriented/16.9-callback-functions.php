<?php

//Callable is a datatype used to call callable function

//We can define callback functions in different ways:

$numbers = [1, 2, 3, 4, 5];

//1.Function as a Expression
$doubleNumbers = function ($element) {
    echo $element * 2;
};
array_map($doubleNumbers, $numbers); //246810

echo '<br>';

//2.Anonymous Function
array_map(function ($element) {
    echo $element * 2;
}, $numbers); //246810



echo '<br>';
//3.Regular Fuction
function doubleNumbers($element)
{
    echo $element * 2;
}
array_map('doubleNumbers', $numbers); //246810

echo '<br>';
//or
$doubleNumbers = 'doubleNumbers';
array_map($doubleNumbers, $numbers); //246810
//Note: Regualar function, Function name is passed as a "string"

