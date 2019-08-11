<?php
declare(strict_types=1);

namespace DesignPattern\Tests\Creational;

use DesignPattern\Creational\Pool\Pokemon;
use DesignPattern\Creational\Pool\PokemonPool;
use PHPUnit\Framework\TestCase;

class PoolTest extends TestCase
{
    public function test(): void
    {
        $pool = new PokemonPool();
        $this->assertEquals(0, $pool->count());

        // getting first Pokemon to battle
        $p1 = $pool->get();
        $this->assertInstanceOf(Pokemon::class, $p1);
        $this->assertEquals(1, $pool->count());

        // getting second Pokemon to battle
        $p2 = $pool->get();
        $this->assertInstanceOf(Pokemon::class, $p2);
        $this->assertNotEquals($p1, $p2);
        $this->assertEquals(2, $pool->count());

        // release first Pokemon from battle
        $pool->release($p1);
        $this->assertEquals(2, $pool->count());

        // getting the first available Pokemon from the pool. This will be the Pokemon that has been just released
        $p3 = $pool->get();
        $this->assertInstanceOf(Pokemon::class, $p3);
        $this->assertSame($p1, $p3);
    }
}
