<?php

namespace spec\CleanPhp\Domain;

use CleanPhp\Domain\Tag;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MoneySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('CleanPhp\Domain\Money');
    }

    function it_should_return_tag(Tag $tag)
    {
        $this->setTag($tag);
        $this->getTag()->shouldReturn($tag);
    }

    function it_should_return_amount()
    {
        $this->setAmount(2.45);
        $this->getAmount()->shouldReturn(2.45);
    }

    function it_should_return_date()
    {
        $this->setDate('2015-09-01 15:00:00');
        $this->getDate()->shouldReturn('2015-09-01 15:00:00');
    }
}
