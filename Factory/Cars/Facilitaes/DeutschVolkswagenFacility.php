<?php

namespace Factory\Facilitaes;

use Factory\Car;
use Factory\Cars\Golf;
use Factory\Cars\Passat;
use Factory\Cars\Tiguan;
use Factory\Cars\Touareg;
use Factory\PartsFactory\DeutschCarPartsFactory;

class DeutschVolkswagenFacility extends VolkswagenFacility
{

    public function createCar(string $type): ?Car
    {
        $carPartsFactory = new DeutschCarPartsFactory();

        if ($type == 'Golf') {
            return new Golf($carPartsFactory);
        } elseif ($type == 'Passat') {
            return new Passat($carPartsFactory);
        } elseif ($type == 'Tiguan') {
            return new Tiguan($carPartsFactory);
        } else if ($type == 'Touareg') {
            return new Touareg($carPartsFactory);
        }

        return null;
    }
}