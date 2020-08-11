<?php

namespace DuyDoan\HotelBooking\Model\ResourceModel\Hotel;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'hotel_id';
    protected function _construct()
    {
        $this->_init('DuyDoan\HotelBooking\Model\Hotel', 'DuyDoan\HotelBooking\Model\ResourceModel\Hotel');
    }
}