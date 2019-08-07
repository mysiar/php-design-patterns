<?php
declare(strict_types=1);

namespace DesignPattern\Creational\FactoryMethod;

class AronPokemon implements PokemonInterface
{
    public function pokemonActivity(string $activity): void
    {
        print_r($activity);
    }
}
