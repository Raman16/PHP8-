<?php
function foo()
{
    return 1;
}
var_dump(foo()); //int(1)
//return 1 is typecasted implicity
//to integer



//RETURN TYPES:
//colon (:) here is used to define returning type
//(NOT ALTERNATE SYNTAX FOR FUNCTIONS)
//With 7.1 and later versions:
function boo(): void
{
    return;
}
var_dump(boo()); //NULL


function boo1(): int
{
    return '1';
}
var_dump(boo1()); //int(1)
//return 1 is typecasted implicity to integer
//NOTE:if return type is not matching 
//with expected return type then below error:
//Return value of boo1() must be of the type int,





//PHP 8.0 comes with support for Union Types!
////BELOW CODEs SUPPORT IN PHP8 AND LATER VERSIONS/////
// function boo2(): int|float|array
// {
//     return [];
// }
// var_dump(boo2());//array(0) { }
//void: do something but no return any value
//union types:
//int|float|string



//IF WE ARE EXPECTING DIFFERENT TYPES 
//OF RETURN TYPES THEN WE CAN USE 'mixed' type:
//'mixed' introduced in PHP 8
// function yoo(): mixed{
//     return 'boo';
//     return 1;
//     return true;
// }
// var_dump(yoo());//string(3) "boo"
