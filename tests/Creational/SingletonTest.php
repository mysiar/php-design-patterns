<?php
declare(strict_types=1);

namespace DesignPattern\Tests\Creational;

use DesignPattern\Creational\Singleton\Singleton;
use Error;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testCreatingObjectConstructor(): void
    {
        $this->expectException(Error::class);
        $m = new Singleton();
    }

    public function test(): void
    {
        $s1 = Singleton::getInstance();
        $s2 = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $s1);
        $this->assertSame($s1, $s2);
    }
}
