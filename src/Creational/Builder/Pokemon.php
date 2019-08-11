<?php
declare(strict_types=1);

namespace DesignPattern\Creational\Builder;

class Pokemon
{
    /** @var string */
    private $name;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Pokemon
    {
        $this->name = $name;
        return $this;
    }
}
