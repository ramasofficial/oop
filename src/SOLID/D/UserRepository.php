<?php

declare(strict_types=1);

namespace OOP\SOLID\D;

class UserRepository
{
    /**
     * @var DBConnectionInterface
     */
    private $db;

    public function __construct(DBConnectionInterface $db)
    {
        $this->db = $db;
    }

    public function store(User $user)
    {
        // TODO: Implement store() method.
    }
}