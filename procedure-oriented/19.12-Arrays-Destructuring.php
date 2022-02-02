<?php


$array = [10, 20, 30, 40];
[$a, $b, $c, $d] = $array;
echo $a . ' ' . $b . ' ' . $c . ' ' . $d;
//10 20 30 40

echo '<br>';

$array = [10, 20, [30, 40]];
[$a, $b, [$c, $d]] = $array;
echo $a . ' ' . $b . ' ' . $c . ' ' . $d;
//10 20 30 40

echo '<br>';

$array = [10, 20, 30, 40];
[$a,,, $d] = $array;
echo $a . ' ' . $d;
//10 40


echo '<br>';
$array = ['A', 'B', 'C', 'D'];
[0 => $a, 1 => $b, 2 => $c, 3 => $d] = $array;
echo $a . ' ' . $b . ' ' . $c . ' ' . $d;
//A B C D