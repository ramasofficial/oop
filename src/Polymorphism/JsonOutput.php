<?php

declare(strict_types=1);

namespace OOP\Polymorphism;

class JsonOutput implements OutputInterface
{
    public function output(string $string): string
    {
        return json_encode($string);
    }
}