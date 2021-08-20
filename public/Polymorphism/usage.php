<?php

declare(strict_types=1);

use OOP\Polymorphism\JsonOutput;
use OOP\Polymorphism\OutputService;
use OOP\Polymorphism\TextOutput;

require_once '../../vendor/autoload.php';

const NEW_LINE = '<br/>';
const EXAMPLE_STRING = 'Hello.';

$outputService = new OutputService(EXAMPLE_STRING);

echo $outputService->makeOutput(new JsonOutput()) . NEW_LINE . NEW_LINE;

echo $outputService->makeOutput(new TextOutput());