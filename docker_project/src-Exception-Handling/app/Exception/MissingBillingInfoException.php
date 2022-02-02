<?php

namespace App\Exception;

class MissingBillingInfoException extends \Exception
{
    /**
     * MissingBillingInfoException constructor
     * @params string $string
     */
    public function __construct(
        protected $message = 'Missing Billging Information'
    ) {
    }
}
