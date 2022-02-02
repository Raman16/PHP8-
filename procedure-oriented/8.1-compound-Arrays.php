<?php

 //Declaring and Defining Arrays
 $programmingLanguage = ['PHP','JAVA','Python'];
 $frontendTechnologies = array('JS','Vue','REACT');

 //Accessing Arrays
 echo $programmingLanguage[0];//PHP

 //check if an item exist in an array
 echo isset($programmingLanguage[0]);//1
 echo isset($programmingLanguage[3]);//''

//Mutating an Array
$programmingLanguage[1] ='C++';
print_r($programmingLanguage);
//Array ( [0] => PHP [1] => C++ [2] => Python ) 

//Array Count:Number of elements in an array
echo count($programmingLanguage);//3




?>