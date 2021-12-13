<?php

namespace Decorator\Beverages;

use Decorator\BeverageBase;

class GreenTea extends BeverageBase
{
    public function __construct()
    {
        $this->description = 'Green leaf tea';
    }

    public function getCost(): float
    {
        return 125;
    }
}