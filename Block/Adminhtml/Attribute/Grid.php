<?php
/**
 * Copyright © Alekseon sp. z o.o.
 * http://www.alekseon.com/
 */
namespace Alekseon\AlekseonEavSandbox\Block\Adminhtml\Attribute;

use Alekseon\AlekseonEav\Block\Adminhtml\Attribute\Grid as EavGrid;

/**
 * Class Grid
 * @package Alekseon\AlekseonEavSandbox\Block\Adminhtml\Attribute
 */
class Grid extends EavGrid
{
    /**
     * Grid constructor.
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Backend\Helper\Data $backendHelper
     * @param \Magento\Config\Model\Config\Source\Yesno $yesNoSource
     * @param \Alekseon\AlekseonEav\Model\Adminhtml\System\Config\Source\Scopes $scopesSource
     * @param \Alekseon\AlekseonEav\Model\Adminhtml\System\Config\Source\InputType $inputTypeSource
     * @param \Alekseon\AlekseonEavSandbox\Model\ResourceModel\Attribute\CollectionFactory $collectionFactory
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Backend\Helper\Data $backendHelper,
        \Magento\Config\Model\Config\Source\Yesno $yesNoSource,
        \Alekseon\AlekseonEav\Model\Adminhtml\System\Config\Source\Scopes $scopesSource,
        \Alekseon\AlekseonEav\Model\Adminhtml\System\Config\Source\InputType $inputTypeSource,
        \Alekseon\AlekseonEavSandbox\Model\ResourceModel\Attribute\CollectionFactory $collectionFactory,
        array $data = []
    ) {
        parent::__construct($context, $backendHelper, $yesNoSource, $scopesSource, $inputTypeSource, $collectionFactory, $data);
    }
}
