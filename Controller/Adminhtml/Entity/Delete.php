<?php
/**
 * Copyright © Alekseon sp. z o.o.
 * http://www.alekseon.com/
 */
namespace Alekseon\AlekseonEavSandbox\Controller\Adminhtml\Entity;

/**
 * Class Delete
 * @package Alekseon\AlekseonEavSandbox\Controller\Adminhtml\Entity
 */
class Delete extends \Alekseon\AlekseonEavSandbox\Controller\Adminhtml\Entity
{
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|mixed
     */
    public function execute()
    {
        $entity = $this->initEntity();
        if ($entity->getId()) {
            try {
                $entity->delete();
                $this->messageManager->addSuccess(__('You deleted the entity.'));
                return $this->returnResult('*/*/', []);
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
                return $this->returnResult('*/*/', []);
            }
        }
        $this->messageManager->addError(__('We can\'t find an entity to delete.'));
        return $this->returnResult('*/*/', []);
    }
}
