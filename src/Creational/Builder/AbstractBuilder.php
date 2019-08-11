<?php
declare(strict_types=1);

namespace DesignPattern\Creational\Builder;

abstract class AbstractBuilder implements BuilderInterface
{
    /** @var Pokemon */
    protected $pokemon;

    public function getPokemon(): Pokemon
    {
        return $this->pokemon;
    }

    public function buildPokemon(): void
    {
        $this->pokemon = new Pokemon();
    }
}
