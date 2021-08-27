<?php

declare(strict_types=1);

namespace OOP\DDD\DataMapper;

class UserDataMapper
{
    private ArrayAdapter $adapter;

    public function __construct(ArrayAdapter $adapter)
    {
        $this->adapter = $adapter;
    }

    public function findByKey(array $keys): User
    {
        $result = [];

        foreach ($keys as $key) {
            $result[$key] = $this->adapter->find($key);
        }

        return $this->createFromResult($result);
    }

    private function createFromResult($result): User
    {
        return User::fromRequest($result);
    }
}