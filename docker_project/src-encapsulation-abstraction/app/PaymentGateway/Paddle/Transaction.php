<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

class Transaction
{

    public function __construct(private float $amount)
    {
        $this->amount = $amount;
    }
    public function process()
    {
        echo "Processing paddle Transaction.";
        $this->generateReceipt();
        $this->sendEmail(); 
    }
    private function generateReceipt()
    {
        # code...
    }
    private function sendEmail()
    {
        # code...
    }
}
