<?php

namespace Factory\Factory;

use Factory\Car;
/*use Factory\Cars\DeutschGolf;
use Factory\Cars\DeutschPassat;
use Factory\Cars\DeutschTiguan;
use Factory\Cars\DeutschTouareg;*/

class Factory
{

    public function getCar(string $type = null): ?Car
    {
/*        if ($type == 'DeutschGolf') {
            $car = new DeutschGolf();
        } elseif ($type == 'DeutschPassat') {
            $car = new DeutschPassat();
        } elseif ($type == 'DeutschTiguan') {
            $car = new DeutschTiguan();
        } elseif ($type == 'DeutschTouareg') {
            $car = new DeutschTouareg();
        } else {
            $car = new Car();
        }

        return $car;*/
        return null;
    }
}