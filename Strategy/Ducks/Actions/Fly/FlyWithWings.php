<?php

namespace Strategy\Actions\Fly;

use Strategy\Interfaces\IFlyable;

class FlyWithWings implements IFlyable
{
    public function fly(): void
    {
        echo 'I`m flying with my wings' . PHP_EOL;
    }
}