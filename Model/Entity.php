<?php
/**
 * Copyright © Alekseon sp. z o.o.
 * http://www.alekseon.com/
 */
namespace Alekseon\AlekseonEavSandbox\Model;

/**
 * Class Entity
 * @package Alekseon\AlekseonEavSandbox\Model
 */
class Entity extends \Alekseon\AlekseonEav\Model\Entity
{
    /**
     * Entity constructor.
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param ResourceModel\Entity $resource
     * @param ResourceModel\Entity\Collection $resourceCollection
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Alekseon\AlekseonEavSandbox\Model\ResourceModel\Entity $resource,
        \Alekseon\AlekseonEavSandbox\Model\ResourceModel\Entity\Collection $resourceCollection
    ) {
        parent::__construct(
            $context,
            $registry,
            $resource,
            $resourceCollection
        );
    }
}
