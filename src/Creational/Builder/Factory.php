<?php
declare(strict_types=1);

namespace DesignPattern\Creational\Builder;

class Factory
{
    /** @var BuilderInterface */
    private $builder;

    public function __construct(BuilderInterface $builder)
    {
        $this->builder = $builder;
        $this->builder->buildPokemon();
    }

    public function getPokemon(): Pokemon
    {
        return $this->builder->getPokemon();
    }
}
