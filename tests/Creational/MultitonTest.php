<?php
declare(strict_types=1);

namespace DesignPattern\Tests\Creational;

use DesignPattern\Creational\Multiton\Multiton;
use Error;
use PHPUnit\Framework\TestCase;

class MultitonTest extends TestCase
{
    public function testCreatingObjectConstructor(): void
    {
        $this->expectException(Error::class);
        $m = new Multiton();
    }

    public function testGetInstance(): void
    {
        $m1 = Multiton::getInstance('Aron');
        $this->assertInstanceOf(Multiton::class, $m1);

        $m2 = Multiton::getInstance('Aron');
        $this->assertInstanceOf(Multiton::class, $m2);
        $this->assertSame($m1, $m2);
    }
}
