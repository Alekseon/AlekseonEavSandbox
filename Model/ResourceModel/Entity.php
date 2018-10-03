<?php
/**
 * Copyright © Alekseon sp. z o.o.
 * http://www.alekseon.com/
 */
namespace Alekseon\AlekseonEavSandbox\Model\ResourceModel;

/**
 * Class Entity
 * @package Alekseon\AlekseonEavSandbox\Model\ResourceModel
 */
class Entity extends \Alekseon\AlekseonEav\Model\ResourceModel\Entity
{
    /**
     * @var string
     */
    protected $entityTypeCode = 'eav_sandbox_entity';

    /**
     * @var string
     */
    protected $imagesDirName = 'eav_sandbox';

    /**
     * Entity constructor.
     * @param \Magento\Framework\Model\ResourceModel\Db\Context $context
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param Attribute\CollectionFactory $attributeCollectionFactory
     * @param null $connectionName
     */
    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        Attribute\CollectionFactory $attributeCollectionFactory,
        $connectionName = null
    ) {
        $this->attributeCollectionFactory = $attributeCollectionFactory;
        parent::__construct($context, $storeManager, $connectionName);
    }

    /**
     * @return void
     */
    protected function _construct() // @codingStandardsIgnoreLine
    {
        $this->_init('alekseon_eav_sandbox_entity', 'entity_id');
    }
}
