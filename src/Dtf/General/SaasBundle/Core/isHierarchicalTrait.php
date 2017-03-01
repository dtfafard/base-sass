<?php

namespace Dtf\General\SaasBundle\Core;

/**
 * Manages any entity that requires hierarchical behaviors
 *
 * @author psyk3hoe
 */
trait isHierarchicalTrait
{
    /**
     * @var int
     */
    protected $parentId;

    /**
     * @var int
     */
    protected $hierarchyLeft;

    /**
     * @var int
     */
    protected $hierarchyRight;

    /**
     * Set parentId
     *
     * @param integer $parentId
     *
     * @throws TypeError
     */
    public function setParentId(int $parentId)
    {
        $this->parentId = $parentId;
    }

    /**
     * Get parentId
     *
     * @return int
     */
    public function getParentId() : int
    {
        return $this->parentId;
    }

    /**
     * Set hierarchyLeft
     *
     * @param integer $hierarchyLeft
     *
     * @throws TypeError
     */
    public function setHierarchyLeft(int $hierarchyLeft)
    {
        $this->hierarchyLeft = $hierarchyLeft;
    }

    /**
     * Get hierarchyLeft
     *
     * @return int
     */
    public function getHierarchyLeft()
    {
        return $this->hierarchyLeft;
    }

    /**
     * Set hierarchyRight
     *
     * @param integer $hierarchyRight
     *
     * @throws TypeError
     */
    public function setHierarchyRight(int $hierarchyRight)
    {
        $this->hierarchyRight = $hierarchyRight;
    }

    /**
     * Get hierarchyRight
     *
     * @return int
     */
    public function getHierarchyRight() : int
    {
        return $this->hierarchyRight;
    }
}