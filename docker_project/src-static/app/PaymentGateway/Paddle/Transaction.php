<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

use App\Enums\Status;

class Transaction
{

    public static $count = 10;
    private static $count2 = 20;

    public function __construct(
        public  float $amount,
        public string $description
    ) {
        self::$count++;
        self::$count2++;
    }

    public function process()
    {
        echo "Processing paddle Transaction.";
    }

    public static function getPrivateCount(): int
    {
        //since static properties can be accessed without creating object.
        //i.e can be accessed using class, the variable "$this" is 
        //not availble in static method.
        //static method does not have access to the pseudo-variable "$this"
        return self::$count2;
    }
}
