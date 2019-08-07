<?php
declare(strict_types=1);

namespace DesignPattern\Tests\Creational;

use DesignPattern\Creational\Builder\AipomBuilder;
use DesignPattern\Creational\Builder\DrowzeeBuilder;
use DesignPattern\Creational\Builder\Factory;
use DesignPattern\Creational\Builder\Pokemon;
use Mysiar\TestBundle\Unit\UnitTestCase;

class BuilderTest extends UnitTestCase
{
    public function testAipomBuilder(): void
    {
        $aipom = new Factory(new AipomBuilder());

        $this->assertInstanceOf(Pokemon::class, $aipom->getPokemon());
        $this->assertEquals(AipomBuilder::NAME, $aipom->getPokemon()->getName());
    }

    public function testDrowzeeBuilder(): void
    {
        $drowzee = new Factory(new DrowzeeBuilder());

        $this->assertInstanceOf(Pokemon::class, $drowzee->getPokemon());
        $this->assertEquals(DrowzeeBuilder::NAME, $drowzee->getPokemon()->getName());
    }
}
