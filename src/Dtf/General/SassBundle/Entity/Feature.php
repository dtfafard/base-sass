<?php

namespace Dtf\General\SassBundle\Entity;

use Dtf\General\SassBundle\Core\{isHierarchicalTrait};

/**
 * Feature
 *
 * Features are parts of the system you want to give or remove access to your
 * users. From my experience, most SASS systems allow the use of features
 * through activation/access control systems.
 * 
 */
class Feature
{
    use isHierarchicalTrait;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     *
     * @var float
     */
    private $basePrice;

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
     * @return Feature
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
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Feature
     * @throws TypeError
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

    /**
     *
     * @param float $basePrice
     */
    public function setBasePrice($basePrice)
    {
        if (is_numeric($basePrice)) {
            $this->basePrice = (float)$basePrice;
        } else {
            throw new \TypeError('Invalid Type for Base Price');
        }
    }

    /**
     *
     * @return float
     */
    public function getBasePrice() : float
    {
        return $this->basePrice;
    }
}

