<?php
/**
 * Copyright © Alekseon sp. z o.o.
 * http://www.alekseon.com/
 */
namespace Alekseon\AlekseonEavSandbox\Controller\Adminhtml\Entity;

/**
 * Class Edit
 * @package Alekseon\AlekseonEavSandbox\Controller\Adminhtml\Entity
 */
class Edit extends \Alekseon\AlekseonEavSandbox\Controller\Adminhtml\Entity
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    private $resultPageFactory;

    /**
     * Edit constructor.
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\Registry $coreRegistry
     * @param \Alekseon\AlekseonEavSandbox\Model\EntityFactory $entityFactory
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry,
        \Alekseon\AlekseonEavSandbox\Model\EntityFactory $entityFactory,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context, $coreRegistry, $entityFactory);
    }

    /**
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        $entity = $this->initEntity();
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        if ($entity->getId()) {
            $resultPage->getConfig()->getTitle()->prepend(__('Edit Entity') . ' ' . $entity->getName());
        } else {
            $resultPage->getConfig()->getTitle()->prepend(__('New Entity'));
        }
        return $resultPage;
    }
}
