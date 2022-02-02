<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Enums\Status;
use App\PaymentGateway\Paddle\Transaction;

$transaction =  new Transaction(25, 'Transaction 1');

echo '<br>';
//Accessing CONST variables
echo  Status::STATUS_PAID; //paid

echo '<br>';
//CLASS MAGIC CONSTANT:
echo  Transaction::class; //App\PaymentGateway\Paddle\Transaction
echo  $transaction::class; //App\PaymentGateway\Paddle\Transaction


//without const
//$transaction->setStatus('paid1111111');
//Fatal error: Uncaught InvalidArgumentException: Invalid Status 

echo '<br>';
$transaction->setStatus(Status::STATUS_PAID);
var_dump($transaction);
//object(App\PaymentGateway\Paddle\Transaction)#3 (3)
// { ["status":"App\PaymentGateway\Paddle\Transaction":private]=> string(4) 
//"paid" ["amount"]=> float(25) ["description"]=> string(13) "Transaction 1" }