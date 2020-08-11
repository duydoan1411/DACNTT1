<?php

namespace DuyDoan\HotelBooking\Controller\Adminhtml\Hotels;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use phpDocumentor\Reflection\Types\This;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{

    protected $pageResult;

    public function __construct(Context $context, PageFactory $pageFactory)
    {
        parent::__construct($context);
        $this->pageResult = $pageFactory;
    }

    public function execute()
    {
        $pageRestult = $this->pageResult->create();
        $pageRestult->getConfig()->getTitle()->set('Hotel Booking');
        return $pageRestult;
    }
}
