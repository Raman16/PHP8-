<?php
//Functions are global
//The important point is that any function 
//defined in this way has global scope. It 
//can be called from anywhere within the entire program

//1.CREATING FUNCTIONS.
var_dump(foo()); //string(9) "Hello FOO"
function foo()
{
    echo '<br>';
    return 'Hello FOO';
}
var_dump(foo()); //string(9) "Hello FOO"
//Note:if there is no 'return' in function
//then it return NULL.


//2.DECLARING FUNCTION CONDITIONALLY
//condition has to run first and then 
//we were able to call the function, else 
//will get an Error.

//var_dump(boo());//Error
//Error:Call to undefined function boo() 
if (true) {
    function boo()
    {
        echo '<br>';
        return 'Hello BOO';
    }
}
var_dump(boo()); //string(9) "Hello BOO"




//3.inner functions
foo2();//foo2
bar();//bar
function foo2()
{
    echo 'foo2';
    function bar()
    {
        echo 'bar';
    }
}
//
//NOTE:Inorder to call the inner() function,
//we need to run the outer() function first
//and then call inner functions, else will get 
//the error:Call to undefined function bar() 
