<?php
/**
 * Copyright © Alekseon sp. z o.o.
 * http://www.alekseon.com/
 */
namespace Alekseon\AlekseonEavSandbox\Model;

/**
 * Class Attribute
 * @package Alekseon\AlekseonEavSandbox\Model
 */
class Attribute extends \Alekseon\AlekseonEav\Model\Attribute
{
    /**
     * Attribute constructor.
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Alekseon\AlekseonEav\Model\Attribute\InputTypeRepository $inputTypeRepository
     * @param ResourceModel\Attribute $resource
     * @param ResourceModel\Attribute\Collection $resourceCollection
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Alekseon\AlekseonEav\Model\Attribute\InputTypeRepository $inputTypeRepository,
        \Alekseon\AlekseonEavSandbox\Model\ResourceModel\Attribute $resource,
        \Alekseon\AlekseonEavSandbox\Model\ResourceModel\Attribute\Collection $resourceCollection
    ) {
        parent::__construct($context, $registry, $inputTypeRepository, $resource, $resourceCollection);
    }
}
