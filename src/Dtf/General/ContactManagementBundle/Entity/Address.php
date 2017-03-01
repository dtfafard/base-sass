<?php

namespace Dtf\General\SaasBundle\Entity;

/**
 * Address
 */
class Address
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $line1;

    /**
     * @var string
     */
    private $line2;

    /**
     * @var string
     */
    private $line3;

    /**
     * @var string
     */
    private $postCode;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $region;

    /**
     * @var int
     */
    private $countryId;

    /**
     * @var string
     */
    private $details;

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
     * Set description
     *
     * @param string $description
     *
     * @return Address
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
     * Set line1
     *
     * @param string $line1
     *
     * @return Address
     * @throws TypeError
     */
    public function setLine1(string $line1)
    {
        $this->line1 = $line1;

        return $this;
    }

    /**
     * Get line1
     *
     * @return string
     */
    public function getLine1() : string
    {
        return $this->line1;
    }

    /**
     * Set line2
     *
     * @param string $line2
     *
     * @return Address
     * @throws TypeError
     */
    public function setLine2(string $line2)
    {
        $this->line2 = $line2;

        return $this;
    }

    /**
     * Get line2
     *
     * @return string
     */
    public function getLine2() : string
    {
        return $this->line2;
    }

    /**
     * Set line3
     *
     * @param string $line3
     *
     * @return Address
     * @throws TypeError
     */
    public function setLine3(string $line3)
    {
        $this->line3 = $line3;

        return $this;
    }

    /**
     * Get line3
     *
     * @return string
     */
    public function getLine3() : string
    {
        return $this->line3;
    }

    /**
     * Set postCode
     *
     * @param string $postCode
     *
     * @return Address
     * @throws TypeError
     */
    public function setPostCode(string $postCode)
    {
        $this->postCode = $postCode;

        return $this;
    }

    /**
     * Get postCode
     *
     * @return string
     */
    public function getPostCode() : string
    {
        return $this->postCode;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Address
     * @throws TypeError
     */
    public function setCity(string $city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }

    /**
     * Set region
     *
     * @param string $region
     *
     * @return Address
     * @throws TypeError
     */
    public function setRegion(string $region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion() : string
    {
        return $this->region;
    }

    /**
     * Set countryId
     *
     * @param integer $countryId
     *
     * @return Address
     * @throws TypeError
     */
    public function setCountryId(int $countryId)
    {
        $this->countryId = $countryId;

        return $this;
    }

    /**
     * Get countryId
     *
     * @return int
     */
    public function getCountryId() : int
    {
        return $this->countryId;
    }

    /**
     * Set details
     *
     * @param string $details
     *
     * @return Address
     * @throws TypeError
     */
    public function setDetails(string $details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string
     */
    public function getDetails() : string
    {
        return $this->details;
    }
}