<?php


namespace ALevel\Project\Model\ResourceModel;

use ALevel\Project\Api\Schema\QuickOrderSchemaInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class QuickOrder extends AbstractDb
{

    /**
     * Resource initialization
     * @return void
     */
    protected function _construct()
    {
        $this->_init(QuickOrderSchemaInterface::TABLE_NAME, QuickOrderSchemaInterface::ORDER_ID_COL_NAME);
    }
}