<?php
/**
 * Copyright © Alekseon sp. z o.o.
 * http://www.alekseon.com/
 */
namespace Alekseon\AlekseonEavSandbox\Model\ResourceModel\Attribute;

/**
 * Class Collection
 * @package Alekseon\AlekseonEavSandbox\Model\ResourceModel\Attribute
 */
class Collection extends \Alekseon\AlekseonEav\Model\ResourceModel\Attribute\Collection
{
    /**
     * @return void
     */
    protected function _construct() // @codingStandardsIgnoreLine
    {
        $this->_init(
            'Alekseon\AlekseonEavSandbox\Model\Attribute',
            'Alekseon\AlekseonEavSandbox\Model\ResourceModel\Attribute'
        );
    }
}
