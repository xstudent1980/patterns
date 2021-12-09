<?php

namespace Strategy;

use Strategy\Quack\ExoticQuack;

class ExoticDuck extends BaseDuck
{
    public function __construct()
    {
        parent::__construct();
        $this->quackBehaviour = new ExoticQuack();
    }

    public function display(): void
    {
        echo 'Hi! I`m an exotic duck.' . PHP_EOL;
    }
}