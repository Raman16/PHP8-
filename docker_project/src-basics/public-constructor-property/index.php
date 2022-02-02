<?php

declare(strict_types=1);
require_once './Transaction.php';


$transaction = (new Transaction(100, 'Transaction 1'))
    ->addTax(8)
    ->applyDiscount(10);

$amount  = $transaction->getAmount();

//Manually calling destruct
//$transaction = null;
unset($transaction);
var_dump($amount);