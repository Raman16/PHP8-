<?php

use App\Invoice;
use App\InvoiceCollection;

require_once __DIR__ . '/../vendor/autoload.php';

// $invoice = new Invoice(100);
// foreach($invoice as $key=>$value){
//     echo $key.'='.$value.PHP_EOL;
// }


$invoiceCollection = new InvoiceCollection([
    new Invoice(15),
    new Invoice(25),
    new Invoice(50)
]);

foreach($invoiceCollection as $invoice){
    echo $invoice->id.'-'.$invoice->amount.PHP_EOL;
}


foo($invoiceCollection);
foo([1,2,3]);
function foo(iterable $iterable){
    foreach($iterable as $i=>$item){
        //....
        echo $i.PHP_EOL;
    }
}