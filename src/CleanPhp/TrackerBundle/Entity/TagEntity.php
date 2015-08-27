<?php

namespace CleanPhp\TrackerBundle\Entity;

use CleanPhp\Domain\Tag;

/**
 * TagEntity
 */
class TagEntity extends Tag
{
    /**
     * @var integer
     */
    private $id;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
