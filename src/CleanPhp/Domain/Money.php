<?php

namespace CleanPhp\Domain;

class Money
{
    protected $label;
    protected $amount;
    
    public function __construct(Label $label, $amount)
    {
        $this->label = $label;
        $this->amount = $amount;
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function getAmount()
    {
        return $this->amount;
    }
}
