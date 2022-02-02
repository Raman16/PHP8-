<?php

namespace App;

class CappuccinoMaker extends CoffeMaker
{
    use CappuccinoTrait { //we can make private access specifier to public
        CappuccinoTrait::makeCappuccino as public;
    }
}
