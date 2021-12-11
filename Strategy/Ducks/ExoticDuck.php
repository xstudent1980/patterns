<?php

namespace Strategy;

use Strategy\Actions\Quack\ExoticQuack;

class ExoticDuck extends BaseDuck
{
    public function __construct()
    {
        $this->setQuackBehaviour(new ExoticQuack());
        parent::__construct();
    }

    public function display(): void
    {
        echo 'Hi! I`m an exotic duck.' . PHP_EOL;
    }
}