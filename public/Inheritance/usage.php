<?php

declare(strict_types=1);

use OOP\Inheritance\AdministrationEmployee;
use OOP\Inheritance\ManagerEmployee;

require_once '../../vendor/autoload.php';

const NEW_LINE = '<br/>';

$employee1 = new AdministrationEmployee('Monica', 'Administrator');

$employee1->doJob();

echo NEW_LINE . NEW_LINE;

$employee2 = new ManagerEmployee('Silvia', 'Manager');

$employee2->doJob();