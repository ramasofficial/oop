<?php

declare(strict_types=1);

namespace OOP\DDD\Decorator;

abstract class BookingDecorator implements BookingInterface
{
    protected BookingInterface $booking;

    public function __construct(BookingInterface $booking)
    {
        $this->booking = $booking;
    }
}