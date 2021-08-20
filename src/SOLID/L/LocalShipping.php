<?php

declare(strict_types=1);

namespace OOP\Solid\L;

class LocalShipping implements ShippingCalculationInterface
{
    public function calculate(float $weight, string $destination): float
    {
        // TODO: Implement calculate() method.
    }
}