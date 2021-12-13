<?php

namespace Decorator\Decorators;

use Decorator\BeverageBase;

class SugarCondiment extends CondimentsDecoratorBase
{
    private BeverageBase $beverageBase;

    public function __construct(BeverageBase $beverage)
    {
        $this->beverageBase = $beverage;
        $this->description = $this->beverageBase->getDescription() . ' +Sugar';
    }

    public function getCost(): float
    {
        return $this->beverageBase->getCost() + 10;
    }
}