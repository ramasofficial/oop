<?php

declare(strict_types=1);

namespace OOP\SOLID\O;

class Rectangle implements ShapeInterface
{
    /**
     * @var float
     */
    private $width;

    /**
     * @var float
     */
    private $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function area(): float
    {
        return $this->width * $this->height;
    }
}