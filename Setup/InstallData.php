<?php
/**
 * Copyright © Alekseon sp. z o.o.
 * http://www.alekseon.com/
 */
namespace Alekseon\AlekseonEavSandbox\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Alekseon\AlekseonEav\Setup\EavDataSetupFactory;
use Alekseon\AlekseonEav\Model\Adminhtml\System\Config\Source\Scopes;

/**
 * Class InstallData
 * @package Alekseon\AlekseonEavSandbox\Setup
 */
class InstallData implements InstallDataInterface
{
    /**
     * @var EavDataSetupFactory
     */
    private $eavSetupFactory;
    /**
     * @var \Alekseon\AlekseonEavSandbox\Model\AttributeRepository
     */
    private $attributeRepository;

    /**
     * InstallData constructor.
     * @param EavDataSetupFactory $eavSetupFactory
     * @param \Alekseon\AlekseonEavSandbox\Model\AttributeRepository $attributeRepository
     */
    public function __construct(
        EavDataSetupFactory $eavSetupFactory,
        \Alekseon\AlekseonEavSandbox\Model\AttributeRepository $attributeRepository
    ) {
        $this->eavSetupFactory = $eavSetupFactory;
        $this->attributeRepository = $attributeRepository;
    }

    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $eavSetup = $this->eavSetupFactory->create();
        $eavSetup->setAttributeRepository($this->attributeRepository);
        $eavSetup->createAttribute(
            'text_field',
            [
                'frontend_input' => 'text',
                'frontend_label' => 'Text Field',
                'visible_in_grid' => true,
                'is_required' => true,
                'sort_order' => 10,
            ]
        );
        $eavSetup->createAttribute(
            'boolean_field',
            [
                'frontend_input' => 'boolean',
                'frontend_label' => 'Boolean Field',
                'visible_in_grid' => true,
                'is_required' => true,
                'sort_order' => 20,
            ]
        );
        $eavSetup->createAttribute(
            'textarea_field',
            [
                'frontend_input' => 'textarea',
                'frontend_label' => 'Text Area Field',
                'sort_order' => 30,
                'scope' => Scopes::SCOPE_STORE
            ]
        );
        $eavSetup->createAttribute(
            'select_field',
            [
                'frontend_input' => 'select',
                'frontend_label' => 'Select Field',
                'visible_in_grid' => true,
                'sort_order' => 40,
            ]
        );
        $eavSetup->createAttribute(
            'select_field_2',
            [
                'frontend_input' => 'select',
                'frontend_label' => 'Select Field 2',
                'backend_type' => 'varchar',
                'source_model' => 'Alekseon\AlekseonEav\Model\Attribute\Source\Country',
                'visible_in_grid' => true,
                'sort_order' => 50,
            ]
        );
    }
}
