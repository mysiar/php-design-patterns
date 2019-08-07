<?php
declare(strict_types=1);

namespace DesignPattern\Creational\FactoryMethod;

interface PokemonInterface
{
    public function pokemonActivity(string $activity): void;
}
