<?php

declare(strict_types=1);

namespace OOP\DDD\Decorator;

class ExtraBed extends BookingDecorator
{
    private const PRICE = 15;

    public function calculatePrice(): float
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }

    public function getDescription(): string
    {
        return $this->booking->getDescription() . ' with extra bed';
    }
}