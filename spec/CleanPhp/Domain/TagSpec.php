<?php

namespace spec\CleanPhp\Domain;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TagSpec extends ObjectBehavior
{
    function it_should_return_name()
    {
        $this->setName('my name');
        $this->getName()->shouldReturn('my name');
    }
}
