<?php
declare(strict_types=1);

namespace DesignPattern\Creational\FactoryMethod;

interface PokemonFactoryInterface
{
    public function createPokemon(): PokemonInterface;
}
