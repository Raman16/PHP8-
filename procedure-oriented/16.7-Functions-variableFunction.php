<?php

//Variable functions allow you to use a variable like a function. 
//When you append parentheses () to a variable, PHP will look for 
//the function whose name is the same as the value of the variable
//and execute it.Variable functions allow you to use a variable 
//like a function. When you append parentheses () to a variable,
//PHP will look for the function whose name is the same as the value of
//the variable and execute it.

function sum(int ...$arguments): int
{
    return array_sum($arguments);
}
$variableFunction = 'sum';


//To check if a variable is a function or not.
if (is_callable($variableFunction)) {
    echo  $variableFunction(10, 20); //30
}
else{
    echo "Not Found!";
}
//Note:variable function does not work with isset(),empty()