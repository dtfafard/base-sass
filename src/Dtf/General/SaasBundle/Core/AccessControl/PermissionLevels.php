<?php

namespace Dtf\General\SaasBundle\Core\AccessControl;

use Okapon\DoctrineSetTypeBundle\DBAL\Types\AbstractSetType;

/**
 * AccessControllPermissionLevels
 *
 * @author psyk3hoe
 */
class PermissionLevels extends AbstractSetType
{
    const PERMISSION_LEVEL_ADMIN = 'admin';
    const PERMISSION_LEVEL_SHARE = 'share';
    const PERMISSION_LEVEL_CREATE = 'create';
    const PERMISSION_LEVEL_VIEW = 'view';
    const PERMISSION_LEVEL_UPDATE = 'update';
    const PERMISSION_LEVEL_DELETE = 'delete';
    const PERMISSION_LEVEL_COPY = 'copy';

    protected $name = 'AccessControllPermissionLevels';

    /**
     * define your SET type.
     */
    protected static $choices = [
        self::PERMISSION_LEVEL_ADMIN => 'Admin',
        self::PERMISSION_LEVEL_SHARE => 'Share',
        self::PERMISSION_LEVEL_CREATE => 'Create',
        self::PERMISSION_LEVEL_VIEW => 'View',
        self::PERMISSION_LEVEL_UPDATE => 'Update',
        self::PERMISSION_LEVEL_DELETE => 'Delete',
        self::PERMISSION_LEVEL_COPY => 'Copy',
    ];


}