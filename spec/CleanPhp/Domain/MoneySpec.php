<?php

namespace spec\CleanPhp\Domain;

use CleanPhp\Domain\Label;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MoneySpec extends ObjectBehavior
{
    function let(Label $label)
    {
        $this->beConstructedWith($label, 2.45);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('CleanPhp\Domain\Money');
    }

    function it_should_return_label(Label $label)
    {
        $this->getLabel()->shouldReturn($label);
    }

    function it_should_return_amount()
    {
        $this->getAmount()->shouldReturn(2.45);
    }
}
