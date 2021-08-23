<?php

declare(strict_types=1);

require_once '../../../vendor/autoload.php';

const NEW_LINE = '<br/>';

$user = new \OOP\DDD\User('John', 'Smith', 24);

$userDto = new \OOP\DDD\Dto\UserDTO($user);

print_r(serialize($userDto));

echo NEW_LINE . NEW_LINE;

$request = [
    'name' => 'John',
    'last_name' => 'Smith',
    'age' => 24
];

$requestDto = new \OOP\DDD\Dto\RequestDTO();
$requestDto->fromRequest($request);

print_r(serialize($requestDto));