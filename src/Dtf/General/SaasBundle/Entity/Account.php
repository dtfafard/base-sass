<?php

namespace Dtf\General\SaasBundle\Entity;

use Dtf\General\SaasBundle\Core\{isHierarchicalTrait, hasLogMetaData};
use Dtf\General\SaasBundle\Core\Status\{StatusInterface, hasStatusTrait};

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

