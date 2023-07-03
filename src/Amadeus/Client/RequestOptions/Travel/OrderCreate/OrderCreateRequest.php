<?php

/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel\OrderCreate;
use Amadeus\Client\RequestOptions\Travel\OrderCreate\CreateOrder;
use Amadeus\Client\RequestOptions\Travel\DataLists;
use Amadeus\Client\LoadParamsFromArray;

class OrderCreateRequest extends LoadParamsFromArray
{

    public $bookingRef;

    /**
     * @var CreateOrder
     */
    public $createOrder;

    public $commission;

    /**
     * @var DataLists
     */
    public $dataLists;

    public $orderCreateParamters;

    public $paymentInfo;

    public $paxGroup;

    public $promotion;

}
