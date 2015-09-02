<?php

namespace CleanPhp\TrackerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CleanPhp\Domain;

/**
 * Money
 */
class Money extends Domain\Money
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
