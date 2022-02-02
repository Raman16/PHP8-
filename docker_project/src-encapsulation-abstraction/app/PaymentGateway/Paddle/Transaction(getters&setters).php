<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

class Transaction
{

    public function __construct(private  float $amount)
    {
    }
    public function process()
    {
        echo "Processing paddle Transaction.";
    }
    public function getAmount(): float | int
    {
        return $this->amount ;
    }
    public function setAmount(float $amount): self
    {
        $this->amount = $amount;
        return $this;
    }
}
