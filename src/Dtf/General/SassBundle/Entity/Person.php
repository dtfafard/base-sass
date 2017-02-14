<?php

namespace Dtf\General\SassBundle\Entity;

/**
 * Description of Person
 *
 * @author psyk3hoe
 */
class Person {
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
    
    public function getFirstName() : string {
        return $this->firstName;
    }

    public function getMiddleName() : string {
        return $this->middleName;
    }

    public function getLastName() : string {
        return $this->lastName;
    }

    public function getHairColor() : string {
        return $this->hairColor;
    }

    public function getEyeColor() : string {
        return $this->eyeColor;
    }

    public function getHeight() : float {
        return $this->height;
    }
    
    public function getHeightUnit() : string {
        return $this->heightUnit;
    }
    
    public function getWeight() : float {
        return $this->weight;
    }
    
    public function getWeightUnit() : string {
        return $this->weightUnit;
    }
    
    public function getDateOfBirth() : DateTime {
        return $this->dateOfBirth;
    }

    public function getEthnicity() : string {
        return $this->ethnicity;
    }

    public function getGender() : string {
        return $this->gender;
    }
    
    public function getPicture() {
        return $this->picture;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function setMiddleName($middleName) {
        $this->middleName = $middleName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function setHairColor($hairColor) {
        $this->hairColor = $hairColor;
    }

    public function setEyeColor($eyeColor) {
        $this->eyeColor = $eyeColor;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function setHeightUnit($heightUnit) {
        $this->heightUnit = $heightUnit;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function setWeightUnit($weightUnit) {
        $this->weightUnit = $weightUnit;
    }

    public function setDateOfBirth($dateOfBirth) {
        $this->dateOfBirth = $dateOfBirth;
    }

    public function setEthnicity($ethnicity) {
        $this->ethnicity = $ethnicity;
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }
    
    public function setPicture($picture) {
        $this->picture = $picture;
    }
}
