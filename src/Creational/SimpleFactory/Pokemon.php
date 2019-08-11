<?php
declare(strict_types=1);

namespace DesignPattern\Creational\SimpleFactory;

class Pokemon
{
    public function battle(string $ring): void
    {
        print_r($ring);
    }
}
