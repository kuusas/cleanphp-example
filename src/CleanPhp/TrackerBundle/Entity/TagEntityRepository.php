<?php

namespace CleanPhp\TrackerBundle\Entity;

use CleanPhp\Domain\Tag;
use CleanPhp\Model\TagRepositoryInterface;
use Doctrine\ORM\EntityRepository;

/**
 * TagEntityRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TagEntityRepository extends EntityRepository implements TagRepositoryInterface
{
    public function save(Tag $tag)
    {
        $this->_em->persist($tag);
        $this->_em->flush();
    }
}