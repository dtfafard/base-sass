<?php

namespace Dtf\General\SassBundle\Entity;

/**
 * User
 */
class User
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $passwordHash;

    /**
     * @var string
     */
    private $passwordSalt;

    /**
     * @var int
     */
    private $status;

    /**
     * @var string
     */
    private $email;

    /**
     * @var int
     */
    private $created_time;

    /**
     * @var int
     */
    private $update_time;

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
     * Set username
     *
     * @param string $username
     *
     * @return User
     * @throws TypeError
     */
    public function setUsername(string $username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     * @throws TypeError
     */
    public function setPassword(string $password)
    {
        $base = $this->getPasswordBase($password);
        $this->passwordHash = password_hash($base, PASSWORD_BCRYPT);

        return $this;
    }

    /**
     * Get passwordHash
     *
     * @return string
     */
    public function getPasswordHash() : string
    {
        return $this->passwordHash;
    }

    /**
     * Sets the passwordSalt
     *
     */
    final private function setPasswordSalt()
    {
        $this->passwordSalt = mcrypt_create_iv(100);
    }

    /**
     * Get passwordSalt
     *
     * @return string
     */
    final private function getPasswordSalt() : string
    {
        if (sizeof($this->passwordSalt) != 100) {
            $this->setPasswordSalt();
        }

        return $this->passwordSalt;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return User
     * @throws TypeError
     */
    public function setStatus(int $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus() : int
    {
        return $this->status;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     * @throws TypeError
     */
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }

    /**
     * Set createdTime
     *
     * @param integer $createdTime
     *
     * @return User
     * @throws TypeError
     */
    public function setCreatedTime(int $createdTime)
    {
        $this->created_time = $createdTime;

        return $this;
    }

    /**
     * Get createdTime
     *
     * @return integer
     */
    public function getCreatedTime() : int
    {
        return $this->created_time;
    }

    /**
     * Set updateTime
     *
     * @param integer $updateTime   The unix timestamp of the update time
     *
     * @return User
     * @throws TypeError
     */
    public function setUpdateTime($updateTime)
    {
        $this->update_time = $updateTime;

        return $this;
    }

    /**
     * Get updateTime
     *
     * @return integer  the unix timestamp of the last update
     */
    public function getUpdateTime() : int
    {
        return $this->update_time;
    }

    /**
     * Validates if the password
     *
     * @param string $password
     * @return boolean
     */
    public function validatePassword(string $password) : bool
    {
        $base = $this->getPasswordBase($password);

        return password_verify($base, $this->passwordHash);
    }

    /**
     * Returns the password concatenated with the salt
     *
     * @param string $password
     * @return string
     */
    private function getPasswordBase(string $password) : string
    {
        $salt = $this->getPasswordSalt();
        $concatenated = $password . $salt;

        return $concatenated;
    }
}