<?php

declare(strict_types=1);

namespace OOP\DDD\DataMapper;

class User
{
    private string $name;

    private string $lastName;

    private int $age;

    public function __construct(string $name, string $lastName, int $age)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public static function fromRequest(array $request): self
    {
        return new self($request['name'], $request['lastName'], $request['age']);
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