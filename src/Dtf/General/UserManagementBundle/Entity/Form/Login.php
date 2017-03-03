<?php

namespace Dtf\General\UserManagementBundle\Entity\Form;

use Dtf\General\UserManagementBundle\Entity\User;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Decorator class for the user entity. Manages the login data and form to
 * allow users to login onto the site.
 *
 * Login
 *
 * @author psyk3hoe
 */
class Login extends User
{
    /**
     *
     * @var string
     */
    protected $password;

    /**
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     *
     * @param string $password
     * @throws TypeError
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    /**
     *
     * @param ClassMetadata $metadata
     */
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        self::loadUsernameValidatorMetadata($metadata);
        self::loadPasswordValidatorMetadata($metadata);
    }

    /**
     *
     * @param ClassMetadata $metadata
     */
    public static function loadPasswordValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('password', new Assert\NotBlank());
    }
}