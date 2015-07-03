<?php

namespace CleanPhp\TrackerBundle\Entity;

use CleanPhp\Domain\Label;

/**
 * LabelEntity
 */
class LabelEntity extends Label
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
