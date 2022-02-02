<?php

require __DIR__ . '/../vendor/autoload.php';

use App\PaymentGateway\Paddle\Transaction;

$transaction =  new Transaction(25, 'Transaction 1');

echo "public count:" . Transaction::$count . '<br>'; //public count:11
echo "public count:" . $transaction::$count . '<br>'; //public count:11

//Accesing private variable using static method
echo "private count:" . Transaction::getPrivateCount() . '<br>'; //private count:21
echo "private count:" . $transaction->getPrivateCount();//private count:21



//Note: Non-Static variable/method cannot be accessed using 
//using scope resolution operator.