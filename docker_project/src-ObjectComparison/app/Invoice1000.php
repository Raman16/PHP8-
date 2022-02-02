<?php

namespace App;

class Invoice1000
{
    public function __construct(
        public float $amount,
        public string $description
    ) {
    }
}
