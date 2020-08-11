<?php

namespace DuyDoan\HotelBooking\Controller\Adminhtml\Hotels;

use Magento\Backend\App\Action;

class NewAction extends Action
{



    public function execute()
    {
        $params = $this->getRequest()->getParams();
        $params['new'] = true;
        $this->_forward('Edit', null, null, $params);
    }
}
