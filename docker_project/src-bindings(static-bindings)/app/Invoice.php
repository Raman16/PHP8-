<?php

namespace App;

class Invoice
{
  private float $amount;
  private int $id = 1;
  private string $accountNumber = '0123456789';

  public function __debugInfo()
  {
    return [
      'id'            => $this->id,
      'accountNumber' => '****' . substr($this->accountNumber, -4)
    ];
  }
}
