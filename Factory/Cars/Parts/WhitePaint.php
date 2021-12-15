<?php

namespace Factory\Parts;

class WhitePaint extends Paint
{
    public function __construct()
    {
        echo 'Paint is white' . PHP_EOL;
    }
}