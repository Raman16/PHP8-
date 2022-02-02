<?php

//PHP 7.4 introduced the arrow functions that provide a more 
//concise syntax for the anonymous functions.


//Start with the 'fn' keyword.
//Can have only 'one expression' and return this expression.
//arrow functions can automatically access variables from
//their parent scopes.


$array = [1, 2, 3, 4, 5];
$y = 100;
$new_array = array_map(fn ($number) => $number * $y, $array);
print_r($new_array);
//Array ( [0] => 100 [1] => 200 [2] => 300 [3] => 400 [4] => 500 )


//Above code in Anonymous function:
$new_array = array_map(function ($elements) use ($y) {
    return $elements * $y;
}, $array);
print_r($new_array);
////Array ( [0] => 100 [1] => 200 [2] => 300 [3] => 400 [4] => 500 )
