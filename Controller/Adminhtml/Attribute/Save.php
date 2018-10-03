<?php
/**
 * Copyright © Alekseon sp. z o.o.
 * http://www.alekseon.com/
 */
namespace Alekseon\AlekseonEavSandbox\Controller\Adminhtml\Attribute;

/**
 * Class Save
 * @package Alekseon\AlekseonEavSandbox\Controller\Adminhtml\Attribute
 */
class Save extends \Alekseon\AlekseonEavSandbox\Controller\Adminhtml\Attribute
{
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|mixed
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        if ($data) {
            $attribute = $this->initAttribute('id', false);
            $attribute->addData($data);
            try {
                $this->attributeRepository->save($attribute);
                $this->messageManager->addSuccess(__('You saved the attribute.'));
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
            }
            return $this->returnResult('*/*/');
        }
        return $this->returnResult('*/*/', []);
    }
}
