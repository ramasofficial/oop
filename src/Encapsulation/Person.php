<?php

declare(strict_types=1);

namespace OOP\Encapsulation;

use DateTime;

class Person
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var DateTime
     */
    private $birthdate;

    public function __construct(string $name, string $lastName, DateTime $birthdate)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->birthdate = $birthdate;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return DateTime
     */
    public function getBirthdate(): DateTime
    {
        return $this->birthdate;
    }
}