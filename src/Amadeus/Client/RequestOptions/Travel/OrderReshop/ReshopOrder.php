<?php

/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel\OrderReshop;
use Amadeus\Client\RequestOptions\Travel\OrderReshop\ServiceOrder;
use Amadeus\Client\RequestOptions\Travel\Individual;

use Amadeus\Client\LoadParamsFromArray;

class ReshopOrder extends LoadParamsFromArray
{

    /**
     * @var Individual
     */
    public $updatePaxName;

    /**
     * @var ServiceOrder
     */
    public $serviceOrder;	

}
