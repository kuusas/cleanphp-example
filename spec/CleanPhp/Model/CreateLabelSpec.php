<?php

namespace spec\CleanPhp\Model;

use CleanPhp\Domain\Label;
use CleanPhp\Model\LabelRepositoryInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Symfony\Component\Validator\ValidatorInterface;

class CreateLabelSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('CleanPhp\Model\CreateLabel');
    }

    function let(LabelRepositoryInterface $repository, ValidatorInterface $validator)
    {   
        $this->beConstructedWith($repository, $validator);
    }

    function it_should_save_label_with_name(Label $label, $repository, $validator)
    {
        $label->getName()->willReturn('Expenses');

        $repository->save($label)->shouldBeCalled();
        $validator->validate($label)->shouldBeCalled();
        $validator->validate($label)->willReturn(true);

        $this->create($label);
    }

    function it_should_throw_exception_on_validation_failure(Label $label, $validator)
    {
        $validator->validate($label)->willReturn(false);

        $this->shouldThrow('\RuntimeException')->during('create', [$label]);
    }
}
