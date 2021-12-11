<?php

namespace Strategy;

class UpgradeableDuck extends BaseDuck
{
    public function display(): void
    {
        echo 'I`m an upgradeable duck!' . PHP_EOL;
    }
}