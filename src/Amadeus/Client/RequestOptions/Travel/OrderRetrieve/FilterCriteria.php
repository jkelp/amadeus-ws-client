<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel\OrderRetrieve;
use Amadeus\Client\RequestOptions\Travel\Order;
use Amadeus\Client\LoadParamsFromArray;

class FilterCriteria extends LoadParamsFromArray
{

    /**
     * @var Order
     */

    public $order;

}
