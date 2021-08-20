<?php

declare(strict_types=1);

namespace OOP\SOLID\O;

class Square implements ShapeInterface
{
    /**
     * @var float
     */
    private $length;

    public function __construct(float $length)
    {
        $this->length = $length;
    }

    public function area(): float
    {
        return pow($this->length, 2);
    }
}