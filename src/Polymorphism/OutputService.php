<?php

declare(strict_types=1);

namespace OOP\Polymorphism;

class OutputService
{
    /**
     * @var string
     */
    private $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function makeOutput(OutputInterface $output): string
    {
        return $output->output($this->string);
    }
}