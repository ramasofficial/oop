<?php

declare(strict_types=1);

namespace OOP\Polymorphism;

class OutputService
{
    public function makeOutput(OutputInterface $output): string
    {
        return $output->output();
    }
}