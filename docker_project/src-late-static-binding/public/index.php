<?php
require __DIR__ . '/../vendor/autoload.php';

// echo \App\ClassA::getName().PHP_EOL;
// echo \App\ClassB::getName().PHP_EOL;

$classA = new \App\ClassA();
$classB = new \App\ClassB();


echo $classA->getName().PHP_EOL;
echo $classB->getName().PHP_EOL;
