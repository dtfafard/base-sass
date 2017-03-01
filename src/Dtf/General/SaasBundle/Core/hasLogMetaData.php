<?php

namespace Dtf\General\SaasBundle\Core;

/**
 *
 * @author psyk3hoe
 */
trait hasLogMetaData
{


    /**
     * @var int
     */
    protected $createTime;

    /**
     * @var int
     */
    protected $updateTime;

    /**
     * @var int
     */
    protected $createUserId;

    /**
     * @var int
     */
    protected $updateUserId;

    /**
     * Set createTime
     *
     * @param integer $createTime
     *
     * @return Account
     */
    public function setCreateTime(int $createTime)
    {
        $this->createTime = $createTime;

        return $this;
    }

    /**
     * Get createTime
     *
     * @return int
     */
    public function getCreateTime() : int
    {
        return $this->createTime;
    }

    /**
     * Set updateTime
     *
     * @param integer $updateTime
     *
     * @return Account
     */
    public function setUpdateTime(int $updateTime)
    {
        $this->updateTime = $updateTime;

        return $this;
    }

    /**
     * Get updateTime
     *
     * @return int
     */
    public function getUpdateTime() : int
    {
        return $this->updateTime;
    }

    /**
     * Set createUserId
     *
     * @param integer $createUserId
     *
     * @return Account
     */
    public function setCreateUserId(int $createUserId)
    {
        $this->createUserId = $createUserId;

        return $this;
    }

    /**
     * Get createUserId
     *
     * @return int
     */
    public function getCreateUserId() : int
    {
        return $this->createUserId;
    }

    /**
     * Set updateUserId
     *
     * @param integer $updateUserId
     *
     * @return Account
     */
    public function setUpdateUserId(int $updateUserId)
    {
        $this->updateUserId = $updateUserId;

        return $this;
    }

    /**
     * Get updateUserId
     *
     * @return int
     */
    public function getUpdateUserId() : int
    {
        return $this->updateUserId;
    }
}