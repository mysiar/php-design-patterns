<?php
declare(strict_types=1);

namespace DesignPattern\Creational\AbstractFactory;

class JeepCar implements CarInterface
{

    public function drive(): string
    {
        return 'Driving Jeep';
    }
}
