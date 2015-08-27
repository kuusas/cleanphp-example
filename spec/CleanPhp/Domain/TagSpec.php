<?php

namespace spec\CleanPhp\Domain;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TagSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('my name');
    }

    function it_should_return_name()
    {
        $this->getName()->shouldReturn('my name');
    }
}
