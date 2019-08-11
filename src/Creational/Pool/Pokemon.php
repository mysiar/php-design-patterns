<?php
declare(strict_types=1);

namespace DesignPattern\Creational\Pool;

use DateTime;

class Pokemon
{
    /** @var DateTime */
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new DateTime();
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }
}
