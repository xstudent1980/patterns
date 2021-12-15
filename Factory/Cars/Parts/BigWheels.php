<?php

namespace Factory\Parts;

class BigWheels extends Wheels
{
    public function __construct()
    {
        echo 'Wheels are 17"' . PHP_EOL;
    }
}