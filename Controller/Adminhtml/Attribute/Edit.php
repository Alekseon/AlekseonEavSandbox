<?php
/**
 * Copyright © Alekseon sp. z o.o.
 * http://www.alekseon.com/
 */
namespace Alekseon\AlekseonEavSandbox\Controller\Adminhtml\Attribute;

/**
 * Class Edit
 * @package Alekseon\AlekseonEavSandbox\Controller\Adminhtml\Attribute
 */
class Edit extends \Alekseon\AlekseonEavSandbox\Controller\Adminhtml\Attribute
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    private $resultPageFactory;

    /**
     * Edit constructor.
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\Registry $coreRegistry
     * @param \Alekseon\AlekseonEavSandbox\Model\AttributeRepository $attributeRepository
     * @param \Alekseon\AlekseonEavSandbox\Model\AttributeFactory $attributeFactory
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry,
        \Alekseon\AlekseonEavSandbox\Model\AttributeRepository $attributeRepository,
        \Alekseon\AlekseonEavSandbox\Model\AttributeFactory $attributeFactory,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context, $coreRegistry, $attributeRepository, $attributeFactory);
    }

    /**
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        try {
            $attribute = $this->initAttribute();
        } catch (\Exception $e) {
            $this->messageManager->addError($e->getMessage());
            return $this->returnResult('*/*/');
        }
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        if ($attribute->getId()) {
            $resultPage->getConfig()->getTitle()->prepend(__('Edit Attribute') . ' ' . $attribute->getFrontendLabel());
        } else {
            $resultPage->getConfig()->getTitle()->prepend(__('New Attribute'));
        }
        return $resultPage;
    }
}
