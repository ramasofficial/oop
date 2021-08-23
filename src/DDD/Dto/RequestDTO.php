<?php

declare(strict_types=1);

namespace OOP\DDD\Dto;

class RequestDTO
{
    /**
     * @var mixed
     */
    private $name;

    /**
     * @var mixed
     */
    private $lastName;

    /**
     * @var mixed
     */
    private $age;

    public function fromRequest(array $request): void
    {
        $this->name = $request['name'];
        $this->lastName = $request['last_name'];
        $this->age = $request['age'];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}