<?php

namespace App;

use App\Exception\InvoiceException;
use App\Exception\MissingBillingInfoException;

class Invoice
{

    public function __construct(public Customer $customer)
    {
    }
    public function process(float $amount): void
    {
        if ($amount < 0) {
           // throw new \InvalidArgumentException('Invalid Invoice amount');
           throw InvoiceException::invalidAmount();
        }
        if (empty($this->customer->getBillingInfo())) {
            //throw new MissingBillingInfoException();
            throw InvoiceException::missingBillingInfo();
        }
        echo "Processing $" . $amount . "invoice-";
        sleep(1);
        echo 'Ok' . PHP_EOL;
    }
}
