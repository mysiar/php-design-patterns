<?php
declare(strict_types=1);

namespace DesignPattern\Creational\Builder;

interface BuilderInterface
{
    public function getPokemon(): Pokemon;
    public function buildPokemon(): void;
}
