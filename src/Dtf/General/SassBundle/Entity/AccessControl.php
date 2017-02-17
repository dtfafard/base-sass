<?php

namespace Dtf\General\SassBundle\Entity;

/**
 * AccessControl
 */
class AccessControl
{
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
     * @var Dtf\General\SassBundle\Core\AccessControl\PermissionLevels
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
     * @var int
     */
    private $createUserId;

    /**
     * @var int
     */
    private $updateUserId;

    /**
     * @var int
     */
    private $createTime;

    /**
     * @var int
     */
    private $updateTime;


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
     */
    public function setModelId($modelId)
    {
        $this->modelId = $modelId;

        return $this;
    }

    /**
     * Get modelId
     *
     * @return int
     */
    public function getModelId()
    {
        return $this->modelId;
    }

    /**
     * Set modelClass
     *
     * @param string $modelClass
     *
     * @return AccessControl
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
    public function getModelClass()
    {
        return $this->modelClass;
    }

    /**
     * Set permissionLevels
     *
     * @param \Dtf\General\SassBundle\Core\AccessControl\PermissionLevels $permissionLevels
     *
     * @return AccessControl
     */
    public function setPermissionLevels(\Dtf\General\SassBundle\Core\AccessControl\PermissionLevels $permissionLevels)
    {
        $this->permissionLevels = $permissionLevels;

        return $this;
    }

    /**
     * Get permissionLevels
     *
     * @return \Dtf\General\SassBundle\Core\AccessControl\PermissionLevels
     */
    public function getPermissionLevels()
    {
        return $this->permissionLevels;
    }

    /**
     * Set everyone
     *
     * @param boolean $everyone
     *
     * @return AccessControl
     */
    public function setEveryone($everyone)
    {
        $this->everyone = $everyone;

        return $this;
    }

    /**
     * Get everyone
     *
     * @return bool
     */
    public function getEveryone()
    {
        return $this->everyone;
    }

    /**
     * Set accountId
     *
     * @param integer $accountId
     *
     * @return AccessControl
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * Get accountId
     *
     * @return int
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * Set propagateToSubAccounts
     *
     * @param boolean $propagateToSubAccounts
     *
     * @return AccessControl
     */
    public function setPropagateToSubAccounts($propagateToSubAccounts)
    {
        $this->propagateToSubAccounts = $propagateToSubAccounts;

        return $this;
    }

    /**
     * Get propagateToSubAccounts
     *
     * @return bool
     */
    public function getPropagateToSubAccounts()
    {
        return $this->propagateToSubAccounts;
    }

    /**
     * Set roleId
     *
     * @param integer $roleId
     *
     * @return AccessControl
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
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return AccessControl
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set createUserId
     *
     * @param integer $createUserId
     *
     * @return AccessControl
     */
    public function setCreateUserId($createUserId)
    {
        $this->createUserId = $createUserId;

        return $this;
    }

    /**
     * Get createUserId
     *
     * @return int
     */
    public function getCreateUserId()
    {
        return $this->createUserId;
    }

    /**
     * Set updateUserId
     *
     * @param integer $updateUserId
     *
     * @return AccessControl
     */
    public function setUpdateUserId($updateUserId)
    {
        $this->updateUserId = $updateUserId;

        return $this;
    }

    /**
     * Get updateUserId
     *
     * @return int
     */
    public function getUpdateUserId()
    {
        return $this->updateUserId;
    }

    /**
     * Set createTime
     *
     * @param integer $createTime
     *
     * @return AccessControl
     */
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;

        return $this;
    }

    /**
     * Get createTime
     *
     * @return int
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * Set updateTime
     *
     * @param integer $updateTime
     *
     * @return AccessControl
     */
    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;

        return $this;
    }

    /**
     * Get updateTime
     *
     * @return int
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }
}

