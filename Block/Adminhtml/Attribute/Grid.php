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
     * @var \Alekseon\AlekseonEavSandbox\Model\ResourceModel\Attribute\CollectionFactory
     */
    protected $collectionFactory;

    /**
     * Grid constructor.
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Backend\Helper\Data $backendHelper
     * @param \Magento\Config\Model\Config\Source\Yesno $yesNoSource
     * @param \Alekseon\AlekseonEav\Model\Adminhtml\System\Config\Source\Scopes $scopesSource
     * @param \Alekseon\AlekseonEavSandbox\Model\ResourceModel\Attribute\CollectionFactory $collectionFactory
     * @param \Alekseon\AlekseonEav\Model\Adminhtml\System\Config\Source\InputType $inputTypeSource
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Backend\Helper\Data $backendHelper,
        \Magento\Config\Model\Config\Source\Yesno $yesNoSource,
        \Alekseon\AlekseonEav\Model\Adminhtml\System\Config\Source\Scopes $scopesSource,
        \Alekseon\AlekseonEavSandbox\Model\ResourceModel\Attribute\CollectionFactory $collectionFactory,
        \Alekseon\AlekseonEav\Model\Adminhtml\System\Config\Source\InputType $inputTypeSource,
        array $data = []
    ) {
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $backendHelper, $yesNoSource, $scopesSource, $inputTypeSource, $data);
    }

    /**
     * Prepare product attributes grid collection object
     *
     * @return $this
     */
    protected function _prepareCollection()
    {
        $collection = $this->collectionFactory->create();
        $this->setCollection($collection);

        return parent::_prepareCollection();
    }
}
