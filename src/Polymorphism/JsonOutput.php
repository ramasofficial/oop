<?php

declare(strict_types=1);

namespace OOP\Polymorphism;

class JsonOutput implements OutputInterface
{
    /**
     * @var array
     */
    private $array;

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public function output(): string
    {
        return json_encode($this->array);
    }
}