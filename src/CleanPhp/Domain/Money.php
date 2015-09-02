<?php

namespace CleanPhp\Domain;

class Money
{
    protected $tag;
    protected $amount;
    protected $date;

    public function setTag(Tag $tag)
    {
        $this->tag = $tag;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getTag()
    {
        return $this->tag;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function getDate()
    {
        return $this->date;
    }
}
