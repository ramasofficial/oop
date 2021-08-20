<?php

declare(strict_types=1);

require_once '../../vendor/autoload.php';

use OOP\Encapsulation\Person;

const NEW_LINE = '<br/>';

$person = new Person('Vardenis', 'Pavardenis', new DateTime('1996-01-23'));

echo $person->getName() . NEW_LINE;

echo $person->getLastName() . NEW_LINE;

echo $person->getBirthdate()->format('Y-m-d');