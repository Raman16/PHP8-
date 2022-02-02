<?php

//null constant
$x = null; //$x = NULL;
var_dump($x);//NULL


//check if a value is NULL or not
echo is_null($x);//1
//comparison
if($x === null){
    echo 'true';//true
}

//Type conversion:
echo (string)$x;//'' (empty string)
echo (int)$x;//0
var_dump((bool)$x);//bool(false)

//unset and check null values
$z = 120;
unset($z);
var_dump($z);//Undefined variable: z 
//on line 23 NULL

?>