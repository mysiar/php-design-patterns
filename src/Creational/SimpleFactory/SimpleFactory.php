<?php
declare(strict_types=1);

namespace DesignPattern\Creational\SimpleFactory;

class SimpleFactory
{
    public function createPokemon(): Pokemon
    {
        return new Pokemon();
    }

    public function createCar(): Car
    {
        return new Car();
    }
}
