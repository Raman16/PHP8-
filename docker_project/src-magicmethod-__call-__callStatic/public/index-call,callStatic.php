<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Invoice;

$invoice = new Invoice();
$invoice->process(10,20,30);

echo '<br>';
App\Invoice::processStatic(100,200,300);

?>