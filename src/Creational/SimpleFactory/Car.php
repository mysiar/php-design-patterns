<?php
declare(strict_types=1);

namespace DesignPattern\Creational\SimpleFactory;

class Car
{
    public function driveTo(string $destination): void
    {
        print_r($destination);
    }
}
