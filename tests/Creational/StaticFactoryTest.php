<?php
declare(strict_types=1);

namespace DesignPattern\Tests\Creational;

use DesignPattern\Creational\StaticFactory\JohtoPokemon;
use DesignPattern\Creational\StaticFactory\KantoPokemon;
use DesignPattern\Creational\StaticFactory\PokemonStaticFactory;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testThrows(): void
    {
        $this->expectException(InvalidArgumentException::class);
        PokemonStaticFactory::factory('dummy_pokemon_type');
    }

    public function testCreate(): void
    {
        $pokemon = PokemonStaticFactory::factory(PokemonStaticFactory::TYPE_JOHTO);
        $this->assertInstanceOf(JohtoPokemon::class, $pokemon);

        $pokemon = PokemonStaticFactory::factory(PokemonStaticFactory::TYPE_KANTO);
        $this->assertInstanceOf(KantoPokemon::class, $pokemon);
    }
}
