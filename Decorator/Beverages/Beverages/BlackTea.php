<?php

namespace Decorator\Beverages;

use Decorator\BeverageBase;

class BlackTea extends BeverageBase
{
    public function __construct()
    {
        $this->description = 'Black tea from teabag';
    }

    public function getCost(): float
    {
        return 25;
    }
}