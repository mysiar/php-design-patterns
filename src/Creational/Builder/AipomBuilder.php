<?php
declare(strict_types=1);

namespace DesignPattern\Creational\Builder;

class AipomBuilder extends AbstractBuilder
{
    public const NAME = 'Aipom';

    public function buildPokemon(): void
    {
        parent::buildPokemon();
        $this->pokemon->setName(self::NAME);
    }
}
