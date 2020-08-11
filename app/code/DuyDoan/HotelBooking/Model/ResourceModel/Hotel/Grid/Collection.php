<?php

namespace DuyDoan\HotelBooking\Model\ResourceModel\Hotel\Grid;

use Psr\Log\LoggerInterface as Logger;
use Magento\Framework\Data\Collection\Db\FetchStrategyInterface as FetchStrategy;
use Magento\Framework\Data\Collection\EntityFactoryInterface as EntityFactory;
use Magento\Framework\Event\ManagerInterface as EventManager;
use Magento\Framework\View\Element\UiComponent\DataProvider\SearchResult;

class Collection extends SearchResult
{
    public function __construct(
        EntityFactory $entityFactory,
        Logger $logger,
        FetchStrategy $fetchStrategy,
        EventManager $eventManager,
        $identifierName = null,
        $connectionName = null
    ) {
        $mainTable = 'hotel_entity';
        $this->_init('DuyDoan\HotelBooking\Model\Hotel', 'DuyDoan\HotelBooking\Model\ResourceModel\Hotel');
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $mainTable, $this->_resourceModel, $identifierName, $connectionName);
    }
}
