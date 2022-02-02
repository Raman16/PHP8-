<?php

namespace App\Enums;

class Status
{
    public const STATUS_PAID = 'paid';
    public const STATUS_PENDING = 'pending';
    public const STATUS_DECLINED = 'declined';
    //private 'const' can be accessed only with in class 

    public const ALL_STATUSES = [
        self::STATUS_PAID     => 'Paid',
        self::STATUS_PENDING  => 'Pending',
        self::STATUS_DECLINED => 'declined'
    ];
}
