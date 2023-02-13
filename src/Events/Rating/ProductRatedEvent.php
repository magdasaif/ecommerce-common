<?php

namespace Murabba\Ecommerce\Common\Events\Rating;

use Murabba\Ecommerce\Common\DataTransferObjects\Rating\ProductRatingData;
use Murabba\Ecommerce\Common\Enums\Events;
use Murabba\Ecommerce\Common\Events\Event;

class ProductRatedEvent extends Event
{
    public string $type = Events::PRODUCT_RATED;

    public function __construct(public ProductRatingData $data)
    {
    }
}
