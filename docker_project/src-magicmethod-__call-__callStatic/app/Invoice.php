<?php

namespace App;

class Invoice
{

  protected function process(float $amount, $description){
    var_dump('process....');
    var_dump($amount);
    var_dump($description);
  }

  public function __call(string $name, array $arguments)
  {
    if (method_exists($this, $name)) {
      call_user_func_array([$this,$name],$arguments);
    }
  }
}
