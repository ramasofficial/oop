<?php

declare(strict_types=1);

namespace OOP\DDD;

class User
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var int
     */
    private $age;

    public function __construct(string $name, string $lastName, int $age)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }
}