<?php

namespace app;

use App\CappuccinoTrait;
use App\CoffeMaker;
use App\LatteTrait;

class AllInOneMaker extends CoffeMaker
{
    //use CappuccinoTrait;//PSR12 ->SINGLE LINE
    use CappuccinoTrait;
    use LatteTrait;

    //Accessing Private method of trait using "this"
    public function callCappucinoTrait(){
        $this->makeCappuccino();
    }
  
}
