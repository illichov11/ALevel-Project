<?php

namespace ALevel\Project\Model\ResourceModel\QuickOrder;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use ALevel\Project\Model\ResourceModel\QuickOrder as ResourceModel;
use ALevel\Project\Model\QuickOrders as Model;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
