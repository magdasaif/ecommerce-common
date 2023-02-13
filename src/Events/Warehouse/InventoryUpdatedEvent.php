<?php

namespace Murabba\Ecommerce\Common\Events\Warehouse;

use Murabba\Ecommerce\Common\DataTransferObjects\Warehouse\InventoryData;
use Murabba\Ecommerce\Common\Enums\Events;
use Murabba\Ecommerce\Common\Events\Event;

class InventoryUpdatedEvent extends Event
{
    public string $type = Events::INVENTORY_UPDATED;

    public function __construct(public InventoryData $data)
    {
    }
}
