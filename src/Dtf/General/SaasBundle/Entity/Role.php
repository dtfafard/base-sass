<?php

namespace Dtf\General\SaasBundle\Entity;

use Dtf\General\SaasBundle\Core\{hasLogMetaData};
use Dtf\General\SaasBundle\Core\Status\{StatusInterface, hasStatusTrait};

/**
 * Role
 */
class Role implements StatusInterface
{
    use hasStatusTrait, hasLogMetaData;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Role
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}

