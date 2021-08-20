<?php

declare(strict_types=1);

namespace OOP\Inheritance;

abstract class Employee
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $position;

    public function __construct(string $name, string $position)
    {

        $this->name = $name;
        $this->position = $position;
    }

    public function doJob()
    {
        echo $this->name . ' work in ' . $this->position . ' role.<br/>';
    }
}