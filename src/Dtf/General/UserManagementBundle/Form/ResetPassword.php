<?php

namespace Dtf\General\UserManagementBundle\Form;

/**
 * Description of ResetPassword
 *
 * @author psyk3hoe
 */
class ResetPassword
{
    /**
     *
     * @var string
     */
    protected $currentPassword;

    /**
     *
     * @var string
     */
    protected $newPassword;

    /**
     *
     * @var string
     */
    protected $repeatNewPassword;

    /**
     * 
     * @return string
     */
    public function getCurrentPassword()
    {
        return $this->currentPassword;
    }

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
     * @return type
     */
    public function getRepeatNewPassword()
    {
        return $this->repeatNewPassword;
    }

    /**
     *
     * @param string $currentPassword
     * @throws TypeError
     */
    public function setCurrentPassword(string $currentPassword)
    {
        $this->currentPassword = $currentPassword;
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
     * @param string $repeatNewPassword
     * @throws TypeError
     */
    public function setRepeatNewPassword(string $repeatNewPassword)
    {
        $this->repeatNewPassword = $repeatNewPassword;
    }

    /**
     *
     * @param ClassMetadata $metadata
     */
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        //Validation done in PHP for error message translations
        $metadata->addPropertyConstraint('currentPassword', new Assert\NotBlank());
        $metadata->addPropertyConstraint('newPassword', new Assert\NotBlank());
        $metadata->addPropertyConstraint('repeatNewPassword', new Assert\NotBlank());
    }
}