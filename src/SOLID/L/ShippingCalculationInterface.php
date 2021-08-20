<?php

declare(strict_types=1);

namespace OOP\Solid\L;

interface ShippingCalculationInterface
{
    public function calculate(float $weight, string $destination): float;
}