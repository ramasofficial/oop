<?php

declare(strict_types=1);

use OOP\Abstraction\Transaction;

require_once '../../vendor/autoload.php';

$transaction = new Transaction(4.60);

echo $transaction->process();