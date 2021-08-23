<?php

declare(strict_types=1);

use OOP\DDD\ValueObject\Price;

require_once '../../../vendor/autoload.php';

const NEW_LINE = '<br/>';

$price1 = new Price(4.59, 'EUR');

$price2 = new Price(0, 'PLN');

$price3 = new Price(0, 'PLN');

var_dump($price1->isEqualsTo($price2));

echo NEW_LINE;

var_dump($price2->isEqualsTo($price3));