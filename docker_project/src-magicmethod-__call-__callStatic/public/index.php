<?php
require __DIR__ . '/../vendor/autoload.php';
use App\Invoice;
$invoice = new Invoice();
$invoice->process(1000,"some description...");
?>