<?php
/**
 * Copyright © Alekseon sp. z o.o.
 * http://www.alekseon.com/
 */
namespace Alekseon\AlekseonEavSandbox\Model;

/**
 * Class AttributeRepository
 * @package Alekseon\AlekseonEavSandbox\Model
 */
class AttributeRepository extends \Alekseon\AlekseonEav\Model\AttributeRepository
{
    /**
     * @var AttributeFactory
     */
    private $attributeFactory;

    /**
     * AttributeRepository constructor.
     * @param AttributeFactory $attributeFactory
     */
    public function __construct(
        AttributeFactory $attributeFactory
    ) {
        $this->attributeFactory = $attributeFactory;
    }

    /**
     * @return AttributeFactory
     */
    public function getAttributeFactory()
    {
        return $this->attributeFactory;
    }
}
