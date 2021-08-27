<?php

declare(strict_types=1);

use OOP\DDD\DataMapper\ArrayAdapter;
use OOP\DDD\DataMapper\UserDataMapper;

require_once '../../../vendor/autoload.php';

const NEW_LINE = '<br/>';

$userMapper = new UserDataMapper(new ArrayAdapter(['name' => 'John', 'lastName' => 'Smith', 'age' => 16, 'd' => 'papa']));

echo '<pre>';
$user = $userMapper->findByKey(['name', 'lastName', 'age']);
//var_dump($userMapper);

echo sprintf('%s %s - %d years old.', $user->getName(), $user->getLastName(), $user->getAge());