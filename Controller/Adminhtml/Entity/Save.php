<?php
/**
 * Copyright © Alekseon sp. z o.o.
 * http://www.alekseon.com/
 */
namespace Alekseon\AlekseonEavSandbox\Controller\Adminhtml\Entity;

/**
 * Class Save
 * @package Alekseon\AlekseonEavSandbox\Controller\Adminhtml\Entity
 */
class Save extends \Alekseon\AlekseonEavSandbox\Controller\Adminhtml\Entity
{
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|mixed
     */
    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        if ($data) {
            $entity = $this->initEntity();
            $entity->addData($data);
            try {
                $entity->getResource()->save($entity);
                $this->messageManager->addSuccess(__('You saved the entity.'));
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
            }
            return $this->returnResult('*/*/');
        }
        return $this->returnResult('*/*/', []);
    }
}
