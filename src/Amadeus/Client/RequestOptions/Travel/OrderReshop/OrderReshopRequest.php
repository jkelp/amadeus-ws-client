<?php

/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel\OrderReshop;

use Amadeus\Client\LoadParamsFromArray;
use Amadeus\Client\RequestOptions\Travel\BookingRef;

class OrderReshopRequest extends LoadParamsFromArray
{
    public $orderId;
    public $actionContext;

    /**
     * @var FareWaiver
     */
    public $fareWaiver;

    /**
     * @var ReshopParameters
     */
    public $parameters;

    /**
     * @var UpdateOrder
     */
    public $updateOrder;


    /**
     * @var BookingRef
     */
    public $bookingRef;
}
