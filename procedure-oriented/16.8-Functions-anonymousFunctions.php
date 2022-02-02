<?php
//Anonymous Functions are also called as Lambda Functions
//An anonymous function is a function that doesn’t have a name.
//The syntax of anonymous functions in PHP is similar to 
//the syntax used in JavaScript.

$parentScopeVariable = 'Hey, Parent Scope Variable';
$globalValue = 10;

$multiply =  function ($x, $y) use ($parentScopeVariable, &$globalValue): int {

    echo $parentScopeVariable; //Hey, Parent Scope Variable
    $parentScopeVariable = "Value in Anonymous function....";
    $globalValue = 20;

    echo $parentScopeVariable; //Value in Anonymous function.
    return $x * $y;
};
echo $multiply(10, 20); //200
echo $parentScopeVariable; //Hey, Parent Scope Variable
echo $globalValue;//20


//Note:we can send parent scope variable using "use()"
//Also Note value/parameter in use() can be pass by value or
//pass by reference.
