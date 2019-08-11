<?php
declare(strict_types=1);

namespace DesignPattern\Creational\Prototype;

abstract class PokemonPrototype
{
    public const TYPE_KANTO = 'KANTO';
    public const TYPE_JOHTO = 'JOHTO';

    /** @var string */
    protected $name;

    /** @var string */
    protected $type;

    abstract public function __clone();

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): PokemonPrototype
    {
        $this->name = $name;
        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }
}
