<?php

declare(strict_types=1);

namespace Test\Unit;

use OOP\DDD\Factory\UserFactory;
use OOP\DDD\User;
use PHPUnit\Framework\TestCase;

class UserFactoryTest extends TestCase
{
    public function test_user_factory_returns_user_class()
    {
        $factory = new UserFactory();
        $actual = $factory->build('John', 'Smith', 24);

        $this->assertInstanceOf(User::class, $actual);
    }
}