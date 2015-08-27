<?php

namespace CleanPhp\Model;

use CleanPhp\Model\TagRepositoryInterface;

class GetTags
{
    /**
     * @var TagRepositoryInterface
     */
    private $repository;

    public function __construct(TagRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getTags()
    {
        return $this->repository->findAll();
    }
}
