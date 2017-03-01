<?php

namespace Dtf\General\SaasBundle\Entity;

/**
 * Telephone
 */
class Telephone
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $typeId;

    /**
     * @var string
     */
    private $number;

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
     * Set typeId
     *
     * @param integer $typeId
     *
     * @return Telephone
     * @throws TypeError
     */
    public function setTypeId(int $typeId)
    {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * Get typeId
     *
     * @return int
     */
    public function getTypeId() : int
    {
        return $this->typeId;
    }

    /**
     * Set number
     *
     * @param string $number
     *
     * @return Telephone
     * @throws TypeError
     */
    public function setNumber(string $number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }
}