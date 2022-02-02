<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Invoice;

$invoice = new Invoice();

//Undefind Property in class
$invoice->amount = 30;
echo $invoice->amount; 
echo '<br><pre>';
var_dump($invoice);


//__isset() and __unset()
echo isset($invoice->amount).'<br>';   //string(15) "isset called..."  //1

unset($invoice->amount);//string(15) "unset called..."


echo '<br><pre>';
var_dump($invoice);
?>
