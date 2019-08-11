<?php
declare(strict_types=1);

namespace DesignPattern\Creational\Pool;

class PokemonPool
{
    /** @var Pokemon[] */
    private $busyPokemons = [];

    /** @var Pokemon[] */
    private $freePokemons = [];

    public function get(): Pokemon
    {
        if (0 === count($this->freePokemons)) {
            $pokemon = new Pokemon();
        } else {
            $pokemon = array_pop($this->freePokemons);
        }

        $this->busyPokemons[spl_object_hash($pokemon)] = $pokemon;

        return $pokemon;
    }

    public function release(Pokemon $pokemon): void
    {
        $key = spl_object_hash($pokemon);

        if (isset($this->busyPokemons[$key])) {
            unset($this->busyPokemons[$key]);
            $this->freePokemons[$key] = $pokemon;
        }
    }

    public function count(): int
    {
        return count($this->freePokemons) + count($this->busyPokemons);
    }
}
