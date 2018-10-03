<?php
/**
 * Copyright © Alekseon sp. z o.o.
 * http://www.alekseon.com/
 */

namespace Alekseon\AlekseonEavSandbox\Block\Adminhtml\Attribute;

/**
 * Class Edit
 * @package Alekseon\AlekseonEavSandbox\Block\Adminhtml\Attribute
 */
class Edit extends \Magento\Backend\Block\Widget\Form\Container
{
    /**
     * Block group name
     *
     * @var string
     */
    protected $_blockGroup = 'Alekseon_AlekseonEavSandbox';

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_objectId = 'attribute_code';
        $this->_controller = 'adminhtml_attribute';

        parent::_construct();
    }
}
