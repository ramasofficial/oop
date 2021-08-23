<?php

declare(strict_types=1);

use OOP\DDD\Iterator\Days;
use OOP\DDD\Iterator\LetterCollection;

require_once '../../../vendor/autoload.php';

const NEW_LINE = '<br/>';

$daysIterator = new Days([1, 2, 3, 4, 5, 6]);

echo 'Iterator example:' . NEW_LINE;

foreach ($daysIterator as $key => $value) {
    echo $key . ' - ' . $value . NEW_LINE;
}

echo NEW_LINE . NEW_LINE;

$letterCollection = new LetterCollection(['a' => 'Test 1', 'b' => 'Test 2', 'c' => 'Test 3', 'd' => 'Test 4']);

foreach ($letterCollection->getIterator() as $key => $value) {
    echo $key . ' - ' . $value . NEW_LINE;
}