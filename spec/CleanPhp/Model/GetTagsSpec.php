<?php

namespace spec\CleanPhp\Model;

use CleanPhp\Domain\Tag;
use CleanPhp\Model\TagRepositoryInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GetTagsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('CleanPhp\Model\GetTags');
    }

    function let(TagRepositoryInterface $repository)
    {   
        $this->beConstructedWith($repository);
    }

    function it_should_return_tags($repository)
    {
        $repository->findAll()->willReturn(['Expenses']);

        $this->getTags()->shouldReturn(['Expenses']);
    }

}
