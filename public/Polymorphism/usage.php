<?php

declare(strict_types=1);

use OOP\Polymorphism\JsonOutput;
use OOP\Polymorphism\OutputService;
use OOP\Polymorphism\TextOutput;

require_once '../../vendor/autoload.php';

const NEW_LINE = '<br/>';
const EXAMPLE_STRING = 'Hello.';
const EXAMPLE_ARRAY = ['en_short_hello' => 'Hi', 'en_long_hello' => 'Hello', 'en_bye' => 'Bye'];

$outputService = new OutputService();

echo '<pre>';

echo $outputService->makeOutput(new JsonOutput(EXAMPLE_ARRAY)) . NEW_LINE . NEW_LINE;

echo $outputService->makeOutput(new TextOutput(EXAMPLE_STRING));