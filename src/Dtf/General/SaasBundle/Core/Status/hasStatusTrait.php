<?php

namespace Dtf\General\SaasBundle\Core\Status;

/**
 *
 * @author psyk3hoe
 */
trait hasStatusTrait
{
    /**
     * The status id
     *
     * @var int
     */
    protected $status;

    public static $statuses = [
        StatusInterface::STATUS_ACTIVE,
        StatusInterface::STATUS_INACTIVE,
        StatusInterface::STATUS_ARCHIVED,
    ];

    /**
     * Set status
     *
     * @param integer $status
     *
     * @throws TypeError
     */
    public function setStatus(int $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }
}