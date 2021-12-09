<?php

namespace Strategy;

use Strategy\Interfaces\{IFlyable, IQuackable};
use Strategy\Fly\FlyWithWings;
use Strategy\Quack\Quack;

abstract class BaseDuck
{
    protected IFlyable $flyBehaviour;
    protected IQuackable $quackBehaviour;

    public function __construct()
    {
        $this->flyBehaviour = new FlyWithWings();
        $this->quackBehaviour = new Quack();
    }

    public function setFlyBehaviour(IFlyable $newFlyBehaviour): void
    {
        $this->flyBehaviour = $newFlyBehaviour;
    }

    public function setQuackBehaviour(IQuackable $newQuackBehaviour): void
    {
        $this->quackBehaviour = $newQuackBehaviour;
    }

    public function swim(): void
    {
        echo 'I`m swimming!' . PHP_EOL;
    }

    public function quack(): void
    {
        $this->quackBehaviour->quack();
    }

    public function fly(): void
    {
        $this->flyBehaviour->fly();
    }

    abstract public function display(): void;
}