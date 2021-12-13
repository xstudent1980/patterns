<?php

namespace Decorator\Decorators;

use Decorator\BeverageBase;

class MilkCondiment extends CondimentsDecoratorBase
{
    private BeverageBase $beverageBase;

    public function __construct(BeverageBase $beverage)
    {
        $this->beverageBase = $beverage;
        $this->description = $this->beverageBase->getDescription() . ' +Milk';
    }

    public function getCost(): float
    {
        return $this->beverageBase->getCost() + 50;
    }
}