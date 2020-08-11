<?php

namespace DuyDoan\HotelBooking\Model;

use Magento\Framework\Model\AbstractModel;

class Hotel extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('DuyDoan\HotelBooking\Model\ResourceModel\Hotel');
    }
}
