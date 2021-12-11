<?php

namespace Strategy;

use Strategy\Actions\Fly\NoFly;

class RubberDuck extends BaseDuck
{
    public function __construct()
    {
        $this->setFlyBehaviour(new NoFly());
        parent::__construct();
    }

    public function display(): void
    {
        echo 'I`m a rubber duck!' . PHP_EOL;
    }
}