<?php

use App\PaymentGateway\Paddle\Transaction;

require __DIR__ . '/../vendor/autoload.php';

$transaction = new Transaction(1, 'Transaction 1');

$reflectionProperty = new ReflectionProperty(Transaction::class, 'amount');
$reflectionProperty->setAccessible(true);

$reflectionProperty->setValue($transaction, 1111);
echo "ReflectionProperty Accesing Private Value:" . $reflectionProperty->getValue($transaction);

echo '<br>';

$transaction->process();
