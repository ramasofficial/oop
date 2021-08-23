<?php

declare(strict_types=1);

namespace OOP\DDD\Factory;

use OOP\DDD\User;

class UserFactory
{
    public function build(string $name, string $lastName, int $age): User
    {
        return new User($name, $lastName, $age);
    }
}