<?php

namespace Dtf\General\UserManagementBundle\Entity\Form;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Decorator class for the user entity. Manages the sign up data and form to
 * allow users to sign up onto the site.
 *
 * Login
 *
 * @author psyk3hoe
 */
class SignUp extends Login
{
    /**
     *
     * @var string
     */
    protected $repeatPassword;

    /**
     *
     * @return string
     */
    public function getRepeatPassword()
    {
        return $this->repeatPassword;
    }

    /**
     *
     * @param string $repeatPassword
     * @throws TypeError
     */
    public function setRepeatPassword(string $repeatPassword)
    {
        $this->repeatPassword = $repeatPassword;
    }

    /**
     *
     * @param ClassMetadata $metadata
     */
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        self::loadUsernameValidatorMetadata($metadata);
        self::loadPasswordValidatorMetadata($metadata);
        self::loadRepeatPasswordValidatorMetadata($metadata);
        self::loadEmailValidatorMetadata($metadata);
    }

    /**
     *
     * @param ClassMetadata $metadata
     */
    public static function loadRepeatPasswordValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('repeatPassword', new Assert\NotBlank());
    }
}