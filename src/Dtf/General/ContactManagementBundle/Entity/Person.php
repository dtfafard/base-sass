<?php

namespace Dtf\General\SaasBundle\Entity;

/**
 * Description of Person
 *
 * @author psyk3hoe
 */
class Person
{
    protected $firstName;
    protected $middleName;
    protected $lastName;
    protected $hairColor;
    protected $eyeColor;
    protected $height;
    protected $heightUnit;
    protected $weight;
    protected $weightUnit;
    protected $dateOfBirth;
    protected $ethnicity;
    protected $gender;
    protected $picture;

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getMiddleName(): string
    {
        return $this->middleName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getHairColor(): string
    {
        return $this->hairColor;
    }

    public function getEyeColor(): string
    {
        return $this->eyeColor;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function getHeightUnit(): string
    {
        return $this->heightUnit;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function getWeightUnit(): string
    {
        return $this->weightUnit;
    }

    public function getDateOfBirth(): DateTime
    {
        return $this->dateOfBirth;
    }

    public function getEthnicity(): string
    {
        return $this->ethnicity;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }

    public function setMiddleName(string $middleName)
    {
        $this->middleName = $middleName;
    }

    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
    }

    public function setHairColor(string $hairColor)
    {
        $this->hairColor = $hairColor;
    }

    public function setEyeColor(string $eyeColor)
    {
        $this->eyeColor = $eyeColor;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function setHeightUnit(string $heightUnit)
    {
        $this->heightUnit = $heightUnit;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function setWeightUnit(string $weightUnit)
    {
        $this->weightUnit = $weightUnit;
    }

    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    public function setEthnicity(string $ethnicity)
    {
        $this->ethnicity = $ethnicity;
    }

    public function setGender(string $gender)
    {
        $this->gender = $gender;
    }
}