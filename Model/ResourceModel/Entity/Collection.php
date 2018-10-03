<?php
/**
 * Copyright © Alekseon sp. z o.o.
 * http://www.alekseon.com/
 */
namespace Alekseon\AlekseonEavSandbox\Model\ResourceModel\Entity;

/**
 * Class Collection
 * @package Alekseon\AlekseonEavSandbox\Model\ResourceModel\Entity
 */
class Collection extends \Alekseon\AlekseonEav\Model\ResourceModel\Entity\Collection
{
    /**
     * @return void
     */
    protected function _construct() // @codingStandardsIgnoreLine
    {
        $this->_init(
            'Alekseon\AlekseonEavSandbox\Model\Entity',
            'Alekseon\AlekseonEavSandbox\Model\ResourceModel\Entity'
        );
    }
}
