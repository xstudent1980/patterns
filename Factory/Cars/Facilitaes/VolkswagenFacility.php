<?php

namespace Factory\Facilitaes;

use Factory\Car;

abstract class VolkswagenFacility
{

    public function getCar(string $type = null): ?Car
    {
        $car = $this->createCar($type);

        if ($car instanceof Car) {
            $car->configure();
            $car->assembleBody();
            $car->installEngine();
            $car->paint();
            $car->installWheels();
        }

        return $car;
    }

    abstract public function createCar(string $type);
}