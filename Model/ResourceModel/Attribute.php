<?php
/**
 * Copyright © Alekseon sp. z o.o.
 * http://www.alekseon.com/
 */
namespace Alekseon\AlekseonEavSandbox\Model\ResourceModel;

/**
 * Class Attribute
 * @package Alekseon\AlekseonEavSandbox\Model\ResourceModel
 */
class Attribute extends \Alekseon\AlekseonEav\Model\ResourceModel\Attribute
{
    /**
     * @var string
     */
    protected $entityTypeCode = 'alekseon_eav_sandbox_entity';
    /**
     * @var string
     */
    protected $mainTable = 'alekseon_eav_sandbox_attribute';
    /**
     * @var string
     */
    protected $backendTablePrefix = 'alekseon_eav_sandbox_entity';
    /**
     * @var string
     */
    protected $attributeOptionTable = 'alekseon_eav_sandbox_attribute_option';
    /**
     * @var string
     */
    protected $attributeOptionValueTable = 'alekseon_eav_sandbox_attribute_option_value';
    /**
     * @var string
     */
    protected $attributeFrontendLabelsTable = 'alekseon_eav_sandbox_attribute_frontend_label';
}
