<?php

namespace Decorator\Beverages;

use Decorator\BeverageBase;

class Espresso extends BeverageBase
{
    public function __construct()
    {
        $this->description = 'Small portion of strong coffee';
    }

    public function getCost(): float
    {
        return 150;
    }
}