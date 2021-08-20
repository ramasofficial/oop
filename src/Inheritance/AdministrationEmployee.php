<?php

declare(strict_types=1);

namespace OOP\Inheritance;

class AdministrationEmployee extends Employee
{
    public function doJob()
    {
        parent::doJob();

        echo 'Does administration job.';
    }
}