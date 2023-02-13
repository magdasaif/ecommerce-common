<?php

namespace Murabba\Ecommerce\Common\Events\Product;

use Murabba\Ecommerce\Common\DataTransferObjects\Product\ProductData;
use Murabba\Ecommerce\Common\Enums\Events;
use Murabba\Ecommerce\Common\Events\Event;

class ProductCreatedEvent extends Event
{
    public string $type = Events::PRODUCT_CREATED;

    public function __construct(public readonly ProductData $data)
    {
    }
}
