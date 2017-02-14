<?php

namespace Dtf\General\SassBundle\Entity;

/**
 * TelephoneType
 */
class TelephoneType
{
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
    public function getId() : string
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return TelephoneType
     * @throws TypeError
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     * @throws TypeError
     */
    public function getName() : string
    {
        return $this->name;
    }
}