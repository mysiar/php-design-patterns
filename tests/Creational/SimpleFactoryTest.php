<?php
declare(strict_types=1);

namespace DesignPattern\Tests\Creational;

use DesignPattern\Creational\SimpleFactory\Car;
use DesignPattern\Creational\SimpleFactory\Pokemon;
use DesignPattern\Creational\SimpleFactory\SimpleFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function test(): void
    {
        $factory = new SimpleFactory();

        $pokemon = $factory->createPokemon();
        $this->assertInstanceOf(Pokemon::class, $pokemon);

        $car = $factory->createCar();
        $this->assertInstanceOf(Car::class, $car);
    }
}
