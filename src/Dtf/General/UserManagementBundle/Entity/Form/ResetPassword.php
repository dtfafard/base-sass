<?php

namespace Dtf\General\UserManagementBundle\Entity\Form;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Decorator to the login entity. Manages the data & form login to reset
 * passwords.
 *
 * ResetPassword
 *
 * @author psyk3hoe
 */
class ResetPassword extends SignUp
{
    /**
     *
     * @var string
     */
    protected $newPassword;

    /**
     *
     * @return string
     */
    public function getNewPassword()
    {
        return $this->newPassword;
    }

    /**
     *
     * @param string $newPassword
     * @throws TypeError
     */
    public function setNewPassword(string $newPassword)
    {
        $this->newPassword = $newPassword;
    }

    /**
     *
     * @param ClassMetadata $metadata
     */
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        self::loadPasswordValidatorMetadata($metadata);
        self::loadNewPasswordValidatorMetadata($metadata);
        self::loadRepeatPasswordValidatorMetadata($metadata);
    }

    /**
     *
     * @param ClassMetadata $metadata
     */
    public static function loadNewPasswordValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('newPassword', new Assert\NotBlank());
    }
}