<?php

/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel\OrderReshop;

use Amadeus\Client\LoadParamsFromArray;

class DeleteOrderItem extends LoadParamsFromArray
{

    public $itemId;
    public $serviceId;
}
