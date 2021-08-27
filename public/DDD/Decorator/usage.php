<?php

declare(strict_types=1);

use OOP\DDD\Decorator\DoubleRoomBooking;
use OOP\DDD\Decorator\ExtraBed;
use OOP\DDD\Decorator\WiFi;

require_once '../../../vendor/autoload.php';

const NEW_LINE = '<br/>';

$booking = new DoubleRoomBooking();
$booking = new WiFi($booking);
$booking = new ExtraBed($booking);

echo $booking->calculatePrice();

echo NEW_LINE . NEW_LINE;

echo $booking->getDescription();