<?php
/**
 * Copyright © Alekseon sp. z o.o.
 * http://www.alekseon.com/
 */
namespace Alekseon\AlekseonEavSandbox\Block\Adminhtml\Entity\Edit;

/**
 * Class Tabs
 * @package Alekseon\AlekseonEavSandbox\Block\Adminhtml\Entity\Edit
 */
class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('entity_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Entity Information'));
    }

    /**
     * @return $this
     * @throws \Exception
     */
    protected function _beforeToHtml()
    {
        $this->addTab(
            'general',
            [
                'label' => __('General'),
                'title' => __('General'),
                'content' => $this->getChildHtml('general'),
                'active' => true
            ]
        );

        return parent::_beforeToHtml();
    }
}
