<?php
declare(strict_types=1);

namespace DesignPattern\Creational\Builder;

class DrowzeeBuilder extends AbstractBuilder
{
    public const NAME = 'Drowzee';

    public function buildPokemon(): void
    {
        parent::buildPokemon();
        $this->pokemon->setName(self::NAME);
    }
}
