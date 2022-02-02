<?php

namespace App\Exception;

class InvoiceException extends \Exception
{
    public static function missingBillingInfo()
    {
        return new static('Missing Billing');
    }
    public static function invalidAmount()
    {
        return new static('Invalid Amount');
    }
}
