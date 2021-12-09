<?php

namespace Strategy\Fly;

use Strategy\Interfaces\IFlyable;

class NoFly implements IFlyable
{
    public function fly(): void
    {
    }
}