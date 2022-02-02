<?php

require_once __DIR__ . '/../vendor/autoload.php';


$invoice = new \App\Invoice();

$invoice2 = new $invoice();

//var_dump($invoice, $invoice2, \App\Invoice::create());

$invoice100 = clone $invoice;

var_dump($invoice, $invoice100);
var_dump($invoice100===$invoice);
