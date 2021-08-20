<?php

declare(strict_types=1);

namespace OOP\Abstraction;

class Transaction
{
    /**
     * @var float
     */
    private $amount;

    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function process()
    {
        echo 'Processing ' . $this->amount . '€ transaction...';

        $this->generateReceipt();

        $this->sendEmail();
    }

    private function generateReceipt()
    {

    }

    private function sendEmail()
    {

    }
}