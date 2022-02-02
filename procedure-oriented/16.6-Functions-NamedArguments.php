<?php

//PHP 8 SUPPORTS NAMED PARAMETERS:

//1. Named Arguments
function div(int  $x, int $y): int
{
    return $x / $y;
}
var_dump(div(x: 20, y: 10)); //int(2)

echo '<br>';



//2. Associate Array as Named Arguements:
//In Associate Arrays 'Keys' are being treated
//as arguments 'NAME'
$person = [
    'name' => 'Raman',
    'age'  => 30,
    'job'  => 'IT'
];

function Person(string $name, int $age, string $job)
{
    echo $name . ' is currently ' . $age . ' working as ' . $job;
}
Person(...$person); //Raman is currently 30 working as IT
echo '<br>';
Person(name: $person['name'], age: $person['age'], job: $person['job']);
//Raman is currently 30 working as IT
