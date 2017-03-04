<?php

namespace Dtf\General\UserManagementBundle\Entity;

use Dtf\General\SaasBundle\Core\Status\{StatusInterface, hasStatusTrait};

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 */
class User implements StatusInterface
{
    use hasStatusTrait;

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
     * @var string
     */
    private $email;

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
     * Set password hash for symfony's entity builder
     *
     * @param string $passwordHash
     *
     * @return User
     * @throws TypeError
     * @deprecated  This function should only be used automatically by Symfony's
     *              entity builder
     */
    public function setPasswordHash(string $passwordHash)
    {
        $this->passwordHash = $passwordHash;

        return $this;
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
    public function getPasswordHash()
    {
        return $this->passwordHash;
    }

    /**
     * Sets the passwordSalt
     *
     * @param string $passwordSalt
     * @return User
     * @throws TypeError
     * @deprecated
     */
    public function setPasswordSalt(string $passwordSalt)
    {
        $this->passwordSalt = $passwordSalt;

        return $this;
    }

    /**
     * Creates the password salt according to the recommendations on user
     * password handling and encrypting
     * 
     */
    private function createPasswordSalt()
    {
        $this->passwordSalt = mcrypt_create_iv(100);
    }

    /**
     * Get passwordSalt
     *
     * @return string
     */
    final private function getPasswordSalt()
    {
        if (sizeof($this->passwordSalt) != 100) {
            $this->createPasswordSalt();
        }

        return $this->passwordSalt;
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
    public function getEmail()
    {
        return $this->email;
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

    /**
     * Loads the Username validator metadata when required
     *
     * @param ClassMetadata $metadata
     */
    public static function loadUsernameValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('username', new Assert\NotBlank());
        $metadata->addPropertyConstraint('username', new Assert\Regex([
            'pattern' => '/^\w+$/',
            'message' => 'The username can only be composed of alphanumeric characters and underscores'
        ]));
    }

    /**
     * Loads the Email validator metadata when required
     *
     * @param ClassMetadata $metadata
     */
    public static function loadEmailValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('email', new Assert\Email([
            'message' => 'The email "{{ value }}" is not a valid email.',
            'checkMX' => true,
        ]));
        $metadata->addPropertyConstraint('email', new Assert\NotBlank());
    }


}