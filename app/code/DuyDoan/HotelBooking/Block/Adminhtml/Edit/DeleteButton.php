<?php

namespace DuyDoan\HotelBooking\Block\Adminhtml\Edit;

use DuyDoan\HotelBooking\Controller\RegistryConstants;
use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

class DeleteButton extends GenericButton implements ButtonProviderInterface
{
    public function __construct(
        \Magento\Backend\Block\Widget\Context $context,
        \Magento\Framework\Registry $registry
    )
    {
        parent::__construct($context, $registry);
    }

    public function getButtonData()
    {
        $button = null;

        if ($this->registry->registry(RegistryConstants::IS_HOTEL_EDIT_FORM)) {
            $button = [
                'label' => __('Delete Hotel'),
                'class' => 'delete',
                'id' => 'hotel-edit-delete-button',
                'data_attribute' => [
                    'url' => $this->getUrl('*/*/delete', ['id' => $this->getHotelId()])
                ],
                'on_click' => '',
                'sort_order' => 20,
            ];
        }

        return $button;
    }
}
