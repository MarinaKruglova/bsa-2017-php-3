<?php

namespace BinaryStudioAcademy\Task2;

class UsersPresenter
{
    private $repository;

    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }
    public function getOrderedByLastName(): array
    {
        $users = $this->repository->getAll();
        usort($users, function($a, $b)
        {
            return $a['last_name'] <=> $b['last_name'];
        });
        return $users;
    }
}
