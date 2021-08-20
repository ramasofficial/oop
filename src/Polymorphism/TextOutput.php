<?php

declare(strict_types=1);

namespace OOP\Polymorphism;

class TextOutput implements OutputInterface
{
    /**
     * @var string
     */
    private $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function output(): string
    {
        return $this->string;
    }
}