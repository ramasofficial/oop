<?php

declare(strict_types=1);

namespace OOP\Inheritance;

class ManagerEmployee extends Employee
{
    public function doJob()
    {
        parent::doJob();

        echo 'Does manager job.';
    }
}