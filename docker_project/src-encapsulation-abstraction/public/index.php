<?php

use App\PaymentGateway\Paddle\Transaction;

require __DIR__ . '/../vendor/autoload.php';

$transaction = new Transaction(1, 'Transaction 1');

$transaction->process();
