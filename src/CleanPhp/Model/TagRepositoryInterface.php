<?php

namespace CleanPhp\Model;

use CleanPhp\Domain\Tag;

interface TagRepositoryInterface
{
    public function save(Tag $tag);

    public function findAll();
}
