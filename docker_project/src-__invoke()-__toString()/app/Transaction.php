<?php
namespace App;
class Transaction {
    public function __invoke($argument)
    {
        echo $argument;
    }   
}