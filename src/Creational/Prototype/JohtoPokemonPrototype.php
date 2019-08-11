<?php
declare(strict_types=1);

namespace DesignPattern\Creational\Prototype;

class JohtoPokemonPrototype extends PokemonPrototype
{
    /** @var string */
    protected $type = PokemonPrototype::TYPE_JOHTO;

    public function __clone()
    {
    }
}
