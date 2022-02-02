<?php

$even  = [2, 4, 6, 8, 10];
$odd   = [1, 3, 5, 7, 9];
$prime = [1, 3, 5, 7, 11];

$merged = array_merge($even, $odd, $prime);
print_r($merged);
//Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8[4] => 10
//[5] => 1 [6] => 3 [7] => 5 [8] => 7[9] => 9
//[10] => 1 [11] => 3 [12] => 5 [13] => 7 [14] => 11 )

//Note: If two or more array elements have the same key, 
//the last one overrides the others.
$a1=array("a"=>"red","b"=>"green");
$a2=array("c"=>"blue","b"=>"yellow");
print_r(array_merge($a1,$a2));
//Array ( [a] => red [b] => yellow [c] => blue )