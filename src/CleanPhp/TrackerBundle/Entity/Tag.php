<?php

namespace CleanPhp\TrackerBundle\Entity;

use CleanPhp\Domain;

/**
 * Tag
 */
class Tag extends Domain\Tag
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
