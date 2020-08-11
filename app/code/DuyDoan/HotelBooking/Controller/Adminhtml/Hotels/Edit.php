<?php

namespace DuyDoan\HotelBooking\Controller\Adminhtml\Hotels;

use DuyDoan\HotelBooking\Controller\RegistryConstants;
use DuyDoan\HotelBooking\Model\ResourceModel\Hotel\CollectionFactory;
use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;

class Edit extends Action
{
    private $pageFactoryResult;
    private $registry;
    private $collectionFactory;

    public function __construct(
        Action\Context $context,
        PageFactory $pageFactory,
        \Magento\Framework\Registry $registry,
        CollectionFactory $collectionFactory
    ) {
        $this->collectionFactory = $collectionFactory;
        $this->registry = $registry;
        $this->pageFactoryResult = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $sampleCollection = $this->collectionFactory->create();
        if ($id = $this->getRequest()->getParam('id', false) and $sampleCollection->getItemById($id)) {
            $this->registry->register(RegistryConstants::IS_HOTEL_EDIT_FORM, true);
            $this->registry->register(RegistryConstants::CURRENT_HOTEL_ID, $this->getRequest()->getParam('id'));
            $resultPage = $this->pageFactoryResult->create();
            $resultPage->getConfig()->getTitle()->set('Edit Hotel');
        } else {
            if ($this->getRequest()->getParam('new')) {
                $this->registry->register(RegistryConstants::IS_HOTEL_EDIT_FORM, false);
                $resultPage = $this->pageFactoryResult->create();
                $resultPage->getConfig()->getTitle()->set('New Hotel');
            } else {
                $this->_redirect('*/*/');
            }
        }
        $resultPage->setActiveMenu('DuyDoan_HotelBooking::hotelbooking');

        return $resultPage;
    }
}
