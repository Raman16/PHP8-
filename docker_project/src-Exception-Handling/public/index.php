<?php

use App\Customer;

require_once __DIR__ . '/../vendor/autoload.php';


$invoice = new \App\Invoice(new Customer());

try {
    $invoice->process(-100);
} catch (\App\Exception\InvoiceException $e) {
    echo $e->getMessage() . ' ' . $e->getFile() . ':' . $e->getLine() . PHP_EOL;
}
