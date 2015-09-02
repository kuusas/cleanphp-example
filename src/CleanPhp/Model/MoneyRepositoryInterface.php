<?php

namespace CleanPhp\Model;

use CleanPhp\Domain\Money;

interface MoneyRepositoryInterface
{
    public function save(Money $tag);

    public function findAll();
}
