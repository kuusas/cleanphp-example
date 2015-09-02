<?php

namespace CleanPhp\Model;

use CleanPhp\Domain\Money;

class CreateMoney
{
    private $repository;

    public function __construct(MoneyRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function create(Money $money)
    {
        $this->repository->save($money);
    }
}
