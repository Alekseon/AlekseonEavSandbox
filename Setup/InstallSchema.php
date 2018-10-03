<?php
/**
 * Copyright © Alekseon sp. z o.o.
 * http://www.alekseon.com/
 */

namespace Alekseon\AlekseonEavSandbox\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\InstallSchemaInterface;
use Alekseon\AlekseonEav\Setup\EavSchemaSetupFactory;

/**
 * Class InstallSchema
 * @package Alekseon\AlekseonEavSandbox\Setup
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * @var EavSchemaSetupFactory
     */
    private $eavSetupFactory;

    /**
     * InstallSchema constructor.
     * @param EavSchemaSetupFactory $eavSetupFactory
     */
    public function __construct(
        EavSchemaSetupFactory $eavSetupFactory
    ) {
        $this->eavSetupFactory = $eavSetupFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function install(
        SchemaSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $entityTable = $setup->getConnection()
            ->newTable($setup->getTable('alekseon_eav_sandbox_entity'))
            ->addColumn(
                'entity_id',
                Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'nullable' => false, 'unsigned' => true, 'primary' => true],
                'Entity ID'
            )
            ->setComment('Alekseon Eav Sandbox Entity');

        $setup->getConnection()->createTable($entityTable);

        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
        $eavSetup->createFullEavStructure('alekseon_eav_sandbox_attribute', 'alekseon_eav_sandbox_entity', null, 'alekseon_eav_sandbox_entity');
    }
}
