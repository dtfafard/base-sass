<?php

namespace Dtf\General\SassBundle\Core\Status;

/**
 * Contains the core code for the hasStatusTrait
 *
 * @author psyk3hoe
 */
interface StatusInterface
{
    const STATUS_ACTIVE = 1;    //Entity is active
    const STATUS_INACTIVE = 2;  //Entity is inactive but can still be shown
    const STATUS_ARCHIVED = 3;  //Entity shouldn't be shown
}