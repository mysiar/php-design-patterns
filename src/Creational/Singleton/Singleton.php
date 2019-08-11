<?php
declare(strict_types=1);

namespace DesignPattern\Creational\Singleton;

/** THIS IS CONSIDERED TO BE AN ANTI-PATTERN! */

class Singleton
{
    /** @var Singleton */
    private static $instance;

    public static function getInstance(): Singleton
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * this is private to prevent from creating arbitrary instances
     */
    private function __construct()
    {
    }

    /* phpcs:disable */

    /**
     * prevent instance from being cloned
     */
    private function __clone()
    {
    }

    /**
     * prevent instance from being unserialized
     */
    private function __wakeup(): void
    {
    }
}
