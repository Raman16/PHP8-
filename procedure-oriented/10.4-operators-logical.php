<?php
//Logical Operators:(&& || ! and or xor)
$x = true;
$y = false;
echo (string)$y;//type converted to ''

echo ($x && $y);//''
echo ($x || $y);//1
echo (!$y);//1
echo ($x and $y);//''
echo ($x or $y);//1

$z = $x and $y;
echo $z;//1(effects of precedence operator)


//'OR' IS SHORT CIRCUITING
//'AND'  IS SHORT CIRCUITING
//Yes, the PHP interpreter is "lazy", meaning it 
//will do the minimum number of comparisons possible
// to evaluate conditions.

function sayHello(){
    echo "Hello";
    return true;
}
echo ($x || sayHello());//1 ////does not go to second operand
echo (false && sayHello());//does not go to second operand
