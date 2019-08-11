<?php
declare(strict_types=1);

namespace DesignPattern\Tests\Creational;

use DesignPattern\Creational\Prototype\JohtoPokemonPrototype;
use DesignPattern\Creational\Prototype\KantoPokemonPrototype;
use DesignPattern\Creational\Prototype\PokemonPrototype;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function test(): void
    {
        $kantoPrototype = new KantoPokemonPrototype();
        $johtoPrototype = new JohtoPokemonPrototype();

        for ($i = 0; $i < 20; $i++) {
            $kanto = clone $kantoPrototype;
            $kanto->setName('Jynx ' . strval($i));
            $this->assertInstanceOf(KantoPokemonPrototype::class, $kanto);
            $this->assertEquals(PokemonPrototype::TYPE_KANTO, $kanto->getType());
        }

        for ($i = 0; $i < 20; $i++) {
            $johto = clone $johtoPrototype;
            $johto->setName('Hoothoot ' . strval($i));
            $this->assertInstanceOf(JohtoPokemonPrototype::class, $johto);
            $this->assertEquals(PokemonPrototype::TYPE_JOHTO, $johto->getType());
        }
    }
}
