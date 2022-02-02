<?php

namespace App;

class Rocky implements DebtCollector
{
    public function collect(float $owedAmount): float
    {
        //To
        return $owedAmount * 0.65;
    }
}
