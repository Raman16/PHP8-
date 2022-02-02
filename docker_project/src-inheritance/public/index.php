<?php


use App\ToasterPro;

require __DIR__ . '/../vendor/autoload.php';


$toaster = new ToasterPro();

$toaster->addSlice(Bslice:'bread');//Named Argument
$toaster->addSlice(Bslice:'bread');//Named Argument
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');

$toaster->toast();
$toaster->toastBagel();


foo1($toaster);
function foo1(ToasterPro $toasterPro){
    $toasterPro->toast();
}

//Below code cause an error:
//Below code $toasterPro argument is being sent for Toaster
foo($toaster);
function foo(Toaster $toaster){ //Here $toasterPro argument is being sent
    $toaster->toast();
}