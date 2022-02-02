<?php


require_once __DIR__.'/../vendor/autoload.php';

// $coffeMaker = new \App\CoffeMaker();
// $coffeMaker->makeCoffe();

// $latteMaker = new \App\LatteMaker();
// $latteMaker->makeLatte();
// $latteMaker->makeCoffe();

// $cappuccinoMaker = new \App\CappuccinoMaker();
// $cappuccinoMaker->makeCappuccino().PHP_EOL;
// $cappuccinoMaker->makeCoffe().PHP_EOL;


$allInOneMaker = new \App\AllInOneMaker();
$allInOneMaker->callCappucinoTrait().PHP_EOL;
$allInOneMaker->makeCoffe().PHP_EOL;

?>