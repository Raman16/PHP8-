<?php
require __DIR__ . '/../vendor/autoload.php';
use App\Invoice;
use App\Transaction;


echo "Demo on __toString():".'<br>';
$invoice = new Invoice();
echo $invoice;
echo '<br>';
echo "instanceof Stringable: ";
var_export($invoice instanceof Stringable);

echo '<br>';
echo '<br>';

echo "Demo on __invoke():";
$transaction = new Transaction();
echo '<br>';
$transaction(300);

echo '<br>';
echo "is_callable(): ";
var_export(is_callable($transaction));
