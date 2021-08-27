<?php

declare(strict_types=1);

namespace OOP\DDD\Decorator;

interface BookingInterface
{
    public function calculatePrice(): float;

    public function getDescription(): string;
}