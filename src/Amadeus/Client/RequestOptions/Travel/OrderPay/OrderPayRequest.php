<?php

/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel\OrderPay;

use Amadeus\Client\LoadParamsFromArray;
use Amadeus\Client\RequestOptions\Travel\DataLists;
use Amadeus\Client\RequestOptions\Travel\OrderPay\Order;
use Amadeus\Client\RequestOptions\Travel\OrderPay\PaymentInfo;


class OrderPayRequest extends LoadParamsFromArray
{

    /**
     * @var DataLists
     */
    public $dataLists;

    /**
     * @var Order
     */
    public $order;

    /**
     * @var PaymentInfo
     */
    public $paymentInfo;

    public $parameters;
    public $bookingRef;
    
}
