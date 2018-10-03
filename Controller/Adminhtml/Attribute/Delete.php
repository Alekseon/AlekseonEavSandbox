<?php
/**
 * Copyright © Alekseon sp. z o.o.
 * http://www.alekseon.com/
 */
namespace Alekseon\AlekseonEavSandbox\Controller\Adminhtml\Attribute;

/**
 * Class Delete
 * @package Alekseon\AlekseonEavSandbox\Controller\Adminhtml\Attribute
 */
class Delete extends \Alekseon\AlekseonEavSandbox\Controller\Adminhtml\Attribute
{
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|mixed
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function execute()
    {
        $attribute = $this->initAttribute();
        if ($attribute->getId()) {
            try {
                $this->attributeRepository->delete($attribute);
                $this->messageManager->addSuccess(__('You deleted the attribute.'));
                return $this->returnResult('*/*/', []);
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
                return $this->returnResult('*/*/', []);
            }
        }
        $this->messageManager->addError(__('We can\'t find an attribute to delete.'));
        return $this->returnResult('*/*/', []);
    }
}
