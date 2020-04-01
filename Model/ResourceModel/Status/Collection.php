<?php


namespace ALevel\Project\Model\ResourceModel\Status;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use ALevel\Project\Model\Status as Model;
use ALevel\Project\Model\ResourceModel\Status as ResourceModel;


class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}