<?php
declare(strict_types=1);

namespace Mysiar\Tests\Creational;

use DesignPattern\Creational\AbstractFactory\BmwCar;
use DesignPattern\Creational\AbstractFactory\CarFactory;
use DesignPattern\Creational\AbstractFactory\CarInterface;
use DesignPattern\Creational\AbstractFactory\JeepCar;
use Mysiar\TestBundle\Unit\UnitTestCase;

class AbstractFactoryTest extends UnitTestCase
{
    /** @var CarFactory */
    private $factory;


    protected function setUp(): void
    {
        $this->factory = new CarFactory();
    }

    public function testCreateBmwCar(): void
    {
        $car = $this->factory->createBmwCar();

        $this->assertInstanceOf(BmwCar::class, $car);
        $this->assertInstanceOf(CarInterface::class, $car);
    }

    public function testCreateJeepCar(): void
    {
        $car = $this->factory->createJeepCar();

        $this->assertInstanceOf(JeepCar::class, $car);
        $this->assertInstanceOf(CarInterface::class, $car);
    }
}
