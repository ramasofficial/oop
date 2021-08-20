<?php

declare(strict_types=1);

namespace OOP\SOLID\S;

class UserController
{
    /**
     * @var UserRepository
     */
    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function save(): bool
    {
        $user = new User('test112');

        return $this->repository->save($user);
    }
}