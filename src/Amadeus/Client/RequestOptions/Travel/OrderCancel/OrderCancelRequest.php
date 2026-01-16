<?php

/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel\OrderCancel;

use Amadeus\Client\LoadParamsFromArray;
use Amadeus\Client\RequestOptions\Travel\Order;
use Amadeus\Client\RequestOptions\Travel\BookingRef;

class OrderCancelRequest extends LoadParamsFromArray
{

    /**
     * @var Order
     */
    public $order;

    /**
     * @var BookingRef
     */
    public $bookingRef;

    public $parameters;
    public $refundAmount;

}
