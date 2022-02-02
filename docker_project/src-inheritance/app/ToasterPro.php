<?php

namespace App;

class ToasterPro extends Toaster
{

    protected int $size ;

    public function __construct()
    {
        parent::__construct();
        $this->size = 4;
    }
    public function addSlice(string $Bslice): void
    {
        parent::addSlice($Bslice);
    }
    public function toastBagel()
    {
        foreach ($this->slices as $i => $slice) {
            echo ($i + 1) . ':Toasting with Bagel' . $slice . PHP_EOL;
        }
    }
}
