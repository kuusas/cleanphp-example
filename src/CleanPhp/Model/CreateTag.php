<?php

namespace CleanPhp\Model;

use CleanPhp\Domain\Tag;
use Symfony\Component\Validator\ValidatorInterface;

class CreateTag
{
    private $repository;
    private $validator;

    public function __construct(TagRepositoryInterface $repository, ValidatorInterface $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function create(Tag $tag)
    {
        $res = $this->validator->validate($tag);
        if (!$res) {
            throw new \RuntimeException('Oops');
        }
        $this->repository->save($tag);
    }
}
