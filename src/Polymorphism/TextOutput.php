<?php

declare(strict_types=1);

namespace OOP\Polymorphism;

class TextOutput implements OutputInterface
{
    public function output(string $string): string
    {
        return $string;
    }
}