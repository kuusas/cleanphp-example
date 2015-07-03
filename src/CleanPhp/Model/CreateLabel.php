<?php

namespace CleanPhp\Model;

use CleanPhp\Domain\Label;
use Symfony\Component\Validator\ValidatorInterface;

class CreateLabel
{
    private $repository;
    private $validator;

    public function __construct(LabelRepositoryInterface $repository, ValidatorInterface $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function create(Label $label)
    {
        $res = $this->validator->validate($label);
        if (!$res) {
            throw new \RuntimeException('Oops');
        }
        $this->repository->save($label);
    }
}
