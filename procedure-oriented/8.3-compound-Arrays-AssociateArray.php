<?php
//Associative arrays are arrays that use NAMED KEYS that
// you assign to them.

$programmingLanguages = [
 'PHP'=>'8.0',
 'PYTHON'=>'3.9'
];

//Accessing values using NAMED KEYS.
echo $programmingLanguages['PHP'];//8.0
echo $programmingLanguages['PYTHON'];//3.9

//ADDING NEW ELEMENT USING NAMED KEY
$programmingLanguages['GO'] = '1.15';

print_r($programmingLanguages);
//Array ( [PHP] => 8.0 [PYTHON] => 3.9 [GO] => 1.15 )
?>