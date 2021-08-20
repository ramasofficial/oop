<?php

declare(strict_types=1);

namespace OOP\Solid\L;

class ShippingCalculationService
{
    /**
     * @var float
     */
    private $weight;

    /**
     * @var string
     */
    private $destination;

    public function __construct(float $weight, string $destination)
    {
        $this->weight = $weight;
        $this->destination = $destination;
    }

    public function calculateShipping(ShippingCalculationInterface $shipping): float
    {
        return $shipping->calculate($this->weight, $this->destination);
    }
}