<?php

namespace spec\CleanPhp\Model;

use CleanPhp\Domain\Money;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use CleanPhp\Model\MoneyRepositoryInterface;
use CleanPhp\Domain\Tag;

class CreateMoneySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('CleanPhp\Model\CreateMoney');
    }

    function let(MoneyRepositoryInterface $repository)
    {
        $this->beConstructedWith($repository);
    }

    function it_should_save_money_with_tag(Money $money, Tag $tag, $repository)
    {
        $money->getTag()->willReturn($tag);
        $money->getAmount()->willReturn(10.15);
        $money->getDate()->willReturn('2015-09-01 10:30:20');

        $repository->save($money)->shouldBeCalled();

        $this->create($money);
    }
}
