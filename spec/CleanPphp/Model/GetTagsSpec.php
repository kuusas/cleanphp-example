<?php

namespace spec\CleanPphp\Model;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GetTagsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('CleanPphp\Model\GetTags');
    }
}
