<?php

namespace DuyDoan\HotelBooking\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Hotel extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('hotel_entity', 'hotel_id');
    }
}
