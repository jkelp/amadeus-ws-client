<?php

/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel\OrderReshop;

use Amadeus\Client\LoadParamsFromArray;

class ServiceOrder extends LoadParamsFromArray
{

    /**
     * @var AddOfferItems
     */
    public $addOfferItems;

    /**
     * @var DeleteOrderItem
     */
    public $deleteOrderItem = [];
}
