<?php
declare(strict_types=1);

namespace DesignPattern\Creational\StaticFactory;

use InvalidArgumentException;

final class PokemonStaticFactory
{
    public const TYPE_JOHTO = 'JOHTO';
    public const TYPE_KANTO = 'KANTO';

    public static function factory(string $type): PokemonInterface
    {
        if (self::TYPE_JOHTO === $type) {
            return new JohtoPokemon();
        }

        if (self::TYPE_KANTO === $type) {
            return new KantoPokemon();
        }

        throw new InvalidArgumentException('wrong type');
    }
}
