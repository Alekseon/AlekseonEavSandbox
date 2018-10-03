<?php
/**
 * Copyright © Alekseon sp. z o.o.
 * http://www.alekseon.com/
 */
namespace Alekseon\AlekseonEavSandbox\Block\Adminhtml;

/**
 * Class Entity
 * @package Alekseon\AlekseonEavSandbox\Block\Adminhtml
 */
class Entity extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_controller = 'adminhtml_entity';
        $this->_blockGroup = 'Alekseon_AlekseonEavSandbox';
        $this->_headerText = __('Entities');
        $this->_addButtonLabel = __('Add New Entity');
        parent::_construct();
    }
}
