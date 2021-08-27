<?php

declare(strict_types=1);

namespace OOP\DDD\Decorator;

class DoubleRoomBooking implements BookingInterface
{
    public function calculatePrice(): float
    {
        return 40;
    }

    public function getDescription(): string
    {
        return 'Double room';
    }
}