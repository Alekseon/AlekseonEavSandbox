<?php
/**
 * Copyright © Alekseon sp. z o.o.
 * http://www.alekseon.com/
 */
namespace Alekseon\AlekseonEavSandbox\Block\Adminhtml;

/**
 * Class Attribute
 * @package Alekseon\AlekseonEavSandbox\Block\Adminhtml
 */
class Attribute extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_controller = 'adminhtml_attribute';
        $this->_blockGroup = 'Alekseon_AlekseonEavSandbox';
        $this->_headerText = __('Attributes');
        $this->_addButtonLabel = __('Add New Attribute');
        parent::_construct();
    }
}
