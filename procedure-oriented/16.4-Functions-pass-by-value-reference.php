<?php

//PASS BY VALUE:
function foo(int $x,  int $y): int
{
    return $x + $y;
}

var_dump(foo(10, 20));

//PASS BY REFERENCE
function foo2(int &$x,  int &$y): bool
{
    $x = 1000;
    $y = 2000;
    return true;
}
$a = 10;
$b = 20;
foo2($a, $b);
echo $a, $b;//1000 2000
