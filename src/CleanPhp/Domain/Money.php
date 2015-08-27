<?php

namespace CleanPhp\Domain;

class Money
{
    protected $tag;
    protected $amount;
    
    public function __construct(Tag $tag, $amount)
    {
        $this->tag = $tag;
        $this->amount = $amount;
    }

    public function getTag()
    {
        return $this->tag;
    }

    public function getAmount()
    {
        return $this->amount;
    }
}
