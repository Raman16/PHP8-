<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Invoice;

$invoice = new Invoice();

//Undefind Property in class
$invoice->amount = 12;//string(6) "amount" int(12) __set()
echo $invoice->amount; //string(6) "amount"   __get()
echo '<br>';

//Private Access Specifier
$invoice->amount1 = 14;//string(7) "amount1" int(14) __set()
echo $invoice->amount1;//string(7) "amount1" __get()


echo '<br>';
//Public Access Specifier
$invoice->amount2 = 16; 
echo $invoice->amount2;//16

echo '<br>';
//Protected Access Specifier
$invoice->amount3 = 18;//string(7) "amount3" int(18) __set()
echo $invoice->amount3;//string(7) "amount3" __get()



