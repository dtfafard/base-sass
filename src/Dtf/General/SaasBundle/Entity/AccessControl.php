<?php

namespace Dtf\General\SaasBundle\Entity;

use Dtf\General\SaasBundle\Core\{hasLogMetaData};
use Dtf\General\SaasBundle\Core\AccessControl\PermissionLevels;

/**
 * AccessControl
 */
class AccessControl
{
    use hasLogMetaData;

    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $modelId;

    /**
     * @var string
     */
    private $modelClass;

    /**
     * @var Dtf\General\SaasBundle\Core\AccessControl\PermissionLevels
     */
    private $permissionLevels;

    /**
     * @var bool
     */
    private $everyone;

    /**
     * @var int
     */
    private $accountId;

    /**
     * @var bool
     */
    private $propagateToSubAccounts;

    /**
     * @var int
     */
    private $roleId;

    /**
     * @var int
     */
    private $userId;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set modelId
     *
     * @param integer $modelId
     *
     * @return AccessControl
     * @throws TypeError
     */
    public function setModelId(int $modelId)
    {
        $this->modelId = $modelId;

        return $this;
    }

    /**
     * Get modelId
     *
     * @return int
     */
    public function getModelId() : int
    {
        return $this->modelId;
    }

    /**
     * Set modelClass
     *
     * @param string $modelClass
     *
     * @return AccessControl
     * @throws TypeError
     */
    public function setModelClass($modelClass)
    {
        $this->modelClass = $modelClass;

        return $this;
    }

    /**
     * Get modelClass
     *
     * @return string
     */
    public function getModelClass() : string
    {
        return $this->modelClass;
    }

    /**
     * Set permissionLevels
     *
     * @param \Dtf\General\SaasBundle\Core\AccessControl\PermissionLevels $permissionLevels
     *
     * @return AccessControl
     * @throws TypeError
     */
    public function setPermissionLevels(PermissionLevels $permissionLevels)
    {
        $this->permissionLevels = $permissionLevels;

        return $this;
    }

    /**
     * Get permissionLevels
     *
     * @return \Dtf\General\SaasBundle\Core\AccessControl\PermissionLevels
     */
    public function getPermissionLevels() : PermissionLevels
    {
        return $this->permissionLevels;
    }

    /**
     * Set everyone
     *
     * @param boolean $everyone
     *
     * @return AccessControl
     * @throws TypeError
     */
    public function setEveryone(bool $everyone)
    {
        $this->everyone = $everyone;

        return $this;
    }

    /**
     * Get everyone
     *
     * @return bool
     */
    public function getEveryone() : bool
    {
        return $this->everyone;
    }

    /**
     * Set accountId
     *
     * @param integer $accountId
     *
     * @return AccessControl
     * @throws TypeError
     */
    public function setAccountId(int $accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * Get accountId
     *
     * @return int
     */
    public function getAccountId() : int
    {
        return $this->accountId;
    }

    /**
     * Set propagateToSubAccounts
     *
     * @param boolean $propagateToSubAccounts
     *
     * @return AccessControl
     * @throws TypeError
     */
    public function setPropagateToSubAccounts(bool $propagateToSubAccounts)
    {
        $this->propagateToSubAccounts = $propagateToSubAccounts;

        return $this;
    }

    /**
     * Get propagateToSubAccounts
     *
     * @return bool
     */
    public function getPropagateToSubAccounts() : bool
    {
        return $this->propagateToSubAccounts;
    }

    /**
     * Set roleId
     *
     * @param integer $roleId
     *
     * @return AccessControl
     * @throws TypeError
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;

        return $this;
    }

    /**
     * Get roleId
     *
     * @return int
     */
    public function getRoleId() : int
    {
        return $this->roleId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return AccessControl
     * @throws TypeError
     */
    public function setUserId(int $userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId() : int
    {
        return $this->userId;
    }
}

