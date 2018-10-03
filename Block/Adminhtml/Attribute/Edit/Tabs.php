<?php
/**
 * Copyright © Alekseon sp. z o.o.
 * http://www.alekseon.com/
 */
namespace Alekseon\AlekseonEavSandbox\Block\Adminhtml\Attribute\Edit;

/**
 * Class Tabs
 * @package Alekseon\AlekseonEavSandbox\Block\Adminhtml\Attribute\Edit
 */
class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('attribute_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Attribute Information'));
    }

    /**
     * @return $this
     * @throws \Exception
     */
    protected function _beforeToHtml()
    {
        $this->addTab(
            'main',
            [
                'label' => __('Properties'),
                'title' => __('Properties'),
                'content' => $this->getChildHtml('general'),
                'active' => true
            ]
        );

        $this->addTab(
            'frontend_labels',
            [
                'label' => __('Frontend Labels'),
                'title' => __('Frontend Labels'),
                'content' => $this->getChildHtml('frontend_labels'),
            ]
        );

        return parent::_beforeToHtml();
    }
}
