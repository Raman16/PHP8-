<?php

//////////////////////define()//////////////////////////////////

//1.
 define('INITIALIZE',1);
 define('PENDING',2);
 define('APPROVED',3);
 define('COMPLETED',4);

 //2.Check if "CONSTANT" is Defined or NOT using "defined()"
 echo defined('COMPLETED');//1 (returns boolean true or false)

 //3.print "CONSTANT" value
 echo COMPLETED;//4
/////////////////////////////////////////////////////////////////


///////////////////////////KEYWORD:const//////////////////////////
const STATUS_COMPLETED = true;
const STATUS_FAILED = true;

//////////Difference between define() and keyword:const://///////
//Constant declared by keyword:"const" are defined at compiled time
//Constant declared by define() are defined at runtime
//1.Runtime executing below code "const" will give an error.
if(true){
    define('STATUS_PAID',9);
    //const STATUS_CHECK = true;//syntax error, unexpected 'const'
}

//2.CREATING define() identifier at RUNTIME:
$paid = 'FINISHED';
define('STATUS_'.$paid, 4);
echo COMPLETED;//4

?>