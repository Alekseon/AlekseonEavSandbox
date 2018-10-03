<?php
/**
 * Copyright © Alekseon sp. z o.o.
 * http://www.alekseon.com/
 */
namespace Alekseon\AlekseonEavSandbox\Controller\Adminhtml;

use Magento\Framework\Controller\ResultFactory;

/**
 * Class Attribute
 * @package Alekseon\EavTest01\Controller\Adminhtml
 */
abstract class Attribute extends \Magento\Backend\App\Action
{
    /**
     * @var \Magento\Framework\Registry
     */
    private $coreRegistry;
    /**
     * @var \Alekseon\AlekseonEavSandbox\Model\AttributeRepository
     */
    protected $attributeRepository;
    /**
     * @var \Alekseon\AlekseonEavSandbox\Model\AttributeFactory
     */
    private $attributeFactory;

    /**
     * Attribute constructor.
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\Registry $coreRegistry
     * @param \Alekseon\AlekseonEavSandbox\Model\AttributeRepository $attributeRepository
     * @param \Alekseon\AlekseonEavSandbox\Model\AttributeFactory $attributeFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry,
        \Alekseon\AlekseonEavSandbox\Model\AttributeRepository $attributeRepository,
        \Alekseon\AlekseonEavSandbox\Model\AttributeFactory $attributeFactory
    ) {
        $this->coreRegistry = $coreRegistry;
        $this->attributeRepository = $attributeRepository;
        $this->attributeFactory = $attributeFactory;
        parent::__construct($context);
    }

    /**
     * @return mixed
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    protected function initAttribute($requestParam = 'attribute_code', $loadByCode = true)
    {
        $attribute = $this->coreRegistry->registry('current_attribute');
        if (!$attribute) {
            $attributeId = $this->getRequest()->getParam($requestParam, false);
            if ($attributeId) {
                if ($loadByCode) {
                    $attribute = $this->attributeRepository->getByAttributeCode($attributeId);
                } else {
                    $attribute = $this->attributeRepository->getById($attributeId);
                }
            } else {
                $attribute = $this->attributeFactory->create();
            }
            $this->coreRegistry->register('current_attribute', $attribute);
        }
        return $attribute;
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