<?php
declare(strict_types=1);

namespace DesignPattern\Creational\AbstractFactory;

class CarFactory
{
    public function createBmwCar(): BmwCar
    {
        return new BmwCar();
    }

    public function createJeepCar(): JeepCar
    {
        return new JeepCar();
    }
}
