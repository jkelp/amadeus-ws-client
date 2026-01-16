<?php

/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel\OrderReshop;

use Amadeus\Client\LoadParamsFromArray;

class UpdateOrder extends LoadParamsFromArray
{

    /**
     * @var RepriceOrder
     */
    public $repriceOrder;

    /**
     * @var ReshopOrder
     */
    public $reshopOrder;	

}
