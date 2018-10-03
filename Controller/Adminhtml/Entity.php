<?php
/**
 * Copyright © Alekseon sp. z o.o.
 * http://www.alekseon.com/
 */
namespace Alekseon\AlekseonEavSandbox\Controller\Adminhtml;

use Magento\Framework\Controller\ResultFactory;

/**
 * Class Entity
 * @package Alekseon\AlekseonEavSandbox\Controller\Adminhtml
 */
abstract class Entity extends \Magento\Backend\App\Action
{
    /**
     * @var \Magento\Framework\Registry
     */
    private $coreRegistry;
    /**
     * @var \Alekseon\AlekseonEavSandbox\Model\EntityFactory
     */
    private $entityFactory;

    /**
     * Entity constructor.
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\Registry $coreRegistry
     * @param \Alekseon\AlekseonEavSandbox\Model\StoreFactory $entityFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry,
        \Alekseon\AlekseonEavSandbox\Model\EntityFactory $entityFactory
    ) {
        $this->coreRegistry = $coreRegistry;
        $this->entityFactory = $entityFactory;
        parent::__construct($context);
    }

    /**
     * @param string $requestParam
     * @return mixed
     */
    protected function initEntity($requestParam = 'entity_id', $storeId = null)
    {
        $entity = $this->coreRegistry->registry('current_entity');
        if (!$entity) {
            $entity = $this->entityFactory->create();
            $entityId = $this->getRequest()->getParam($requestParam, false);
            if ($storeId === null) {
                $storeId = $this->getRequest()->getParam('store');
            }
            if ($entityId) {
                $entity->setStoreId($storeId);
                $entity->getResource()->load($entity, $entityId);
            }
            $this->coreRegistry->register('current_entity', $entity);
        }
        return $entity;
    }

    /**
     * @param string $path
     * @param array $params
     * @return mixed
     */
    protected function returnResult($path = '', array $params = [])
    {
        return $this->resultFactory->create(ResultFactory::TYPE_REDIRECT)->setPath($path, $params);
    }
}