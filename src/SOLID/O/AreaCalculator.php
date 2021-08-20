<?php

declare(strict_types=1);

namespace OOP\SOLID\O;

class AreaCalculator
{
    /**
     * @var array|ShapeInterface
     */
    private $shapes;

    public function __construct(array $shapes = [])
    {
        $this->shapes = $shapes;
    }

    public function sum(): float
    {
        $area = [];

        foreach ($this->shapes as $shape) {
            $area[] = $shape->area();
        }

        return array_sum($area);
    }
}