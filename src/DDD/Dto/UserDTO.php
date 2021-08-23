<?php

declare(strict_types=1);

namespace OOP\DDD\Dto;

use OOP\DDD\User;

class UserDTO
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

    public function __construct(User $user)
    {
        $this->name = $user->getName();
        $this->lastName = $user->getLastName();
        $this->age = $user->getAge();
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