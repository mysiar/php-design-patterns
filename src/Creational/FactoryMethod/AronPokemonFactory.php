<?php
declare(strict_types=1);

namespace DesignPattern\Creational\FactoryMethod;

class AronPokemonFactory implements PokemonFactoryInterface
{
    public function createPokemon(): PokemonInterface
    {
        return new AronPokemon();
    }
}
