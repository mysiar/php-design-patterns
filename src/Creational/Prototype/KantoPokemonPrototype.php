<?php
declare(strict_types=1);

namespace DesignPattern\Creational\Prototype;

class KantoPokemonPrototype extends PokemonPrototype
{
    /** @var string */
    protected $type = PokemonPrototype::TYPE_KANTO;

    public function __clone()
    {
    }
}
