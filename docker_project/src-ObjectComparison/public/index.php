<?php

use App\Invoice;
use App\Invoice1000;

require_once __DIR__ . '/../vendor/autoload.php';

$inv1 =  new Invoice(12, 'Invoice');
$inv2 =  new Invoice(12, 'Invoice');
$inv3 =  new Invoice(12, 'Invoice2');

$inv1000 =  new Invoice1000(12, 'Invoice1000');
$copyInv2000 = $inv1;

var_export($inv1 == $inv2);echo '<br/>';  //true
var_export($inv1  == $inv3);echo '<br/>';//false
var_export($inv1 == $inv1000);echo '<br/>';//false
var_export($copyInv2000 == $inv1);echo '<br/>';//true


var_export($inv1 === $inv2);echo '<br/>';//false
var_export($inv1  === $inv3);echo '<br/>';//false
var_export($inv1 === $inv1000);echo '<br/>';//false
var_export($copyInv2000 === $inv1);echo '<br/>';//true



