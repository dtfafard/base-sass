<?php

/**
 * Defines the default values for any feature classes
 *
 * @author psyk3hoe
 */
trait defaultFeatureTrait
{
    /**
     *
     * @return string[]
     */
    public function getDependencies()
    {
        return [];
    }

    /**
     *
     * @return boolean
     */
    public function isRequired()
    {
        return false;
    }
}