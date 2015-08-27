<?php

namespace spec\CleanPhp\Model;

use CleanPhp\Domain\Tag;
use CleanPhp\Model\TagRepositoryInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Symfony\Component\Validator\ValidatorInterface;

class CreateTagSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('CleanPhp\Model\CreateTag');
    }

    function let(TagRepositoryInterface $repository, ValidatorInterface $validator)
    {   
        $this->beConstructedWith($repository, $validator);
    }

    function it_should_save_tag_with_name(Tag $tag, $repository, $validator)
    {
        $tag->getName()->willReturn('Expenses');

        $repository->save($tag)->shouldBeCalled();
        $validator->validate($tag)->shouldBeCalled();
        $validator->validate($tag)->willReturn(true);

        $this->create($tag);
    }

    function it_should_throw_exception_on_validation_failure(Tag $tag, $validator)
    {
        $validator->validate($tag)->willReturn(false);

        $this->shouldThrow('\RuntimeException')->during('create', [$tag]);
    }
}
