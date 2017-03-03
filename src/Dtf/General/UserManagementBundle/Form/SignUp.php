<?php

namespace Dtf\General\UserManagementBundle\Form;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * SignUpForm
 *
 * @author psyk3hoe
 */
class SignUp
{
    /**
     *
     * @var string
     */
    protected $username;

    /**
     *
     * @var string
     */
    protected $email;

    /**
     * @Assert\NotBlank()
     *
     * @var string
     */
    protected $password;

    /**
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

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
     * @param string
     * @throws TypeError
     */
    public function setUsername(string $username)
    {
        $this->username = $username;
    }

    /**
     *
     * @param string $email
     * @throws TypeError
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
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
        //Validation done in PHP for error message translations
        $metadata->addPropertyConstraint('email', new Assert\Email([
            'message' => 'The email "{{ value }}" is not a valid email.',
            'checkMX' => true,
        ]));
        $metadata->addPropertyConstraint('email', new Assert\NotBlank());
        $metadata->addPropertyConstraint('username', new Assert\NotBlank());
        $metadata->addPropertyConstraint('username', new Assert\Regex([
            'pattern' => '/^\w+$/',
        ]));
        $metadata->addPropertyConstraint('password', new Assert\NotBlank());
    }
}