<?php

declare(strict_types=1);

namespace OOP\DDD\DataMapper;

class ArrayAdapter
{
    private array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function find(string $key)
    {
        if(!isset($this->data[$key])) {
            return null;
        }

        return $this->data[$key];
    }
}