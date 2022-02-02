<?php

namespace App;

class Invoice
{

  
  public function __call(string $name,array $arguments)
  {
      var_dump('name:',$name);
      var_dump('arguments:',$arguments);
  }


   public static function __callStatic(string $name,array $arguments)
  {
    var_dump('name:',$name);
    var_dump('arguments:',$arguments);
  }
}
