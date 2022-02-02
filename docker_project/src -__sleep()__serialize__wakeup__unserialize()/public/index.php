<?php

require_once __DIR__ . '/../vendor/autoload.php';


$invoice = new \App\Invoice('1000', 'sample invoice', '8798 9898 5421');

$str = serialize($invoice);
echo $str . PHP_EOL;
echo PHP_EOL;

var_dump(unserialize($str));
