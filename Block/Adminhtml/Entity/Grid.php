<?php
/**
 * Copyright © Alekseon sp. z o.o.
 * http://www.alekseon.com/
 */
namespace Alekseon\AlekseonEavSandbox\Block\Adminhtml\Entity;

use Alekseon\AlekseonEav\Block\Adminhtml\Entity\Grid as EavGrid;

/**
 * Class Grid
 * @package Alekseon\EavTest01\Block\Adminhtml\Entity
 */
class Grid extends EavGrid
{
    protected $_collectionFactory;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Backend\Helper\Data $backendHelper,
        \Alekseon\AlekseonEavSandbox\Model\ResourceModel\Entity\CollectionFactory $collectionFactory,
        array $data = []
    ) {
        $this->_collectionFactory = $collectionFactory;
        parent::__construct($context, $backendHelper, $data);
    }

    /**
     * @return $this
     */
    protected function _prepareCollection()
    {
        $collection = $this->_collectionFactory->create();
        $this->setCollection($collection);

        return parent::_prepareCollection();
    }

    /**
     * @return $this
     * @throws \Exception
     */
    protected function _prepareColumns()
    {
        parent::_prepareColumns();

        $this->addColumn(
            'entity_id',
            [
                'header' => __('Entity Id'),
                'index' => 'entity_id',
            ]
        );

        $this->addAttributeColumns();

        return $this;
    }
}
