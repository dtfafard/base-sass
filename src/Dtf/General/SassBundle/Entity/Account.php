<?php

namespace Dtf\General\SassBundle\Entity;

use Dtf\General\SassBundle\Core\{isHierarchicalTrait, hasLogMetaData};
use Dtf\General\SassBundle\Core\Status\{StatusInterface, hasStatusTrait};

/**
 * Account
 */
class Account implements StatusInterface
{
    use hasStatusTrait, isHierarchicalTrait, hasLogMetaData;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $description;


    /**
     * Get id
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Account
     */
    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
}

