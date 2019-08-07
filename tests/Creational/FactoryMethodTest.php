<?php
declare(strict_types=1);

namespace DesignPattern\Tests\Creational;

use DesignPattern\Creational\FactoryMethod\AronPokemon;
use DesignPattern\Creational\FactoryMethod\AronPokemonFactory;
use DesignPattern\Creational\FactoryMethod\PokemonInterface;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testAronPokemonFactory(): void
    {
        $factory = new AronPokemonFactory();
        $pokemon = $factory->createPokemon();

        $this->assertInstanceOf(PokemonInterface::class, $pokemon);
        $this->assertInstanceOf(AronPokemon::class, $pokemon);

        $activity = 'fight';
        $this->expectOutputString($activity);
        $pokemon->pokemonActivity($activity);
    }
}
