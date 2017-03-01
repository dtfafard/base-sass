<?php

namespace Dtf\General\SaasBundle\Entity;

/**
 * Contact
 */
class Contact
{
    /**
     * @var int
     */
    private $id;

    /**
     *
     * @var string
     */
    protected $email;

    /**
     *
     * @var string
     */
    protected $website;

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
     * Get email
     * 
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Get website
     * 
     * @return string
     */
    public function getWebsite(): string
    {
        return $this->website;
    }

    /**
     * Sets email if it is a valid email
     * 
     * @param string $email
     * @return Contact
     * @throws TypeError
     */
    public function setEmail(string $email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $this->email = $email;
        } else {
            throw new TypeError('Invalid Email given');
        }

        return $this;
    }

    /**
     * Sets website if it is a valid website
     * 
     * @param string $website
     * @return Contact
     * @throws TypeError
     */
    public function setWebsite(string $website)
    {
        if (!filter_var($website, FILTER_VALIDATE_URL) === false) {
            $this->website = $website;
        } else {
            throw new TypeError('Invalid Website given');
        }

        return $this;
    }
}