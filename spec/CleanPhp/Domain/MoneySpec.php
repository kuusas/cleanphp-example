<?php

namespace spec\CleanPhp\Domain;

use CleanPhp\Domain\Tag;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MoneySpec extends ObjectBehavior
{
    function let(Tag $tag)
    {
        $this->beConstructedWith($tag, 2.45);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('CleanPhp\Domain\Money');
    }

    function it_should_return_tag(Tag $tag)
    {
        $this->getTag()->shouldReturn($tag);
    }

    function it_should_return_amount()
    {
        $this->getAmount()->shouldReturn(2.45);
    }
}
