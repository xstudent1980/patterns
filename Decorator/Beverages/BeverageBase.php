<?php

namespace Decorator;

abstract class BeverageBase
{
    protected string $description;

    public function getDescription(): string
    {
        return $this->description;
    }

    abstract public function getCost(): float;
}